// Category filtering
const categoryButtons = document.querySelectorAll(".category-btn");
const phraseCards = document.querySelectorAll(".phrase-card");
const searchInput = document.getElementById("phraseSearch");

// Filter by category
categoryButtons.forEach((btn) => {
  btn.addEventListener("click", function () {
    // Remove active class from all buttons
    categoryButtons.forEach((b) => b.classList.remove("active"));

    // Add active class to clicked button
    this.classList.add("active");

    // Get category
    const category = this.getAttribute("data-category");

    // Filter phrases
    phraseCards.forEach((card) => {
      if (
        category === "all" ||
        card.getAttribute("data-category") === category
      ) {
        card.style.display = "flex";
      } else {
        card.style.display = "none";
      }
    });
  });
});

// Search functionality
searchInput.addEventListener("input", function () {
  const searchTerm = this.value.toLowerCase();

  phraseCards.forEach((card) => {
    const english = card.querySelector("h3").textContent.toLowerCase();
    const khmer = card.querySelector(".khmer-text").textContent;
    const pronunciation = card
      .querySelector(".pronunciation")
      .textContent.toLowerCase();

    if (
      english.includes(searchTerm) ||
      khmer.includes(searchTerm) ||
      pronunciation.includes(searchTerm)
    ) {
      card.style.display = "flex";
    } else {
      card.style.display = "none";
    }
  });
});

// Audio pronunciation using Google Translate TTS
const playButtons = document.querySelectorAll(".play-btn");
let currentAudio = null;

playButtons.forEach((btn) => {
  btn.addEventListener("click", function () {
    const khmerText =
      this.closest(".phrase-card").querySelector(".khmer-text").textContent;

    // Stop current audio if playing
    if (currentAudio) {
      currentAudio.pause();
      currentAudio = null;
    }

    // Visual feedback - button animation
    const originalBg = this.style.background;
    const originalHTML = this.innerHTML;
    this.style.background = "var(--accent-color)";
    this.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';

    try {
      // Use ResponsiveVoice API (free alternative with better CORS support)
      // Fallback: Use Web Speech API with better error handling
      if (typeof responsiveVoice !== "undefined") {
        responsiveVoice.speak(khmerText, "Khmer Female", {
          onstart: () => {
            this.innerHTML = '<i class="fas fa-volume-up"></i>';
          },
          onend: () => {
            this.style.background = originalBg;
            this.innerHTML = originalHTML;
          },
        });
      } else {
        // Fallback to Web Speech API
        if ("speechSynthesis" in window) {
          const utterance = new SpeechSynthesisUtterance(khmerText);
          utterance.lang = "km-KH"; // Khmer language code
          utterance.rate = 0.8;
          utterance.pitch = 1;
          utterance.volume = 1;

          utterance.onstart = () => {
            this.innerHTML = '<i class="fas fa-volume-up"></i>';
          };

          utterance.onend = () => {
            this.style.background = originalBg;
            this.innerHTML = originalHTML;
          };

          utterance.onerror = (event) => {
            console.error("Speech synthesis error:", event);
            this.style.background = originalBg;
            this.innerHTML = originalHTML;

            // Show pronunciation guide instead
            const pronunciation =
              this.closest(".phrase-card").querySelector(
                ".pronunciation",
              ).textContent;
            alert(
              `Pronunciation: ${pronunciation}\n\nNote: Audio playback may not be available for Khmer on your device. Please use the pronunciation guide.`,
            );
          };

          speechSynthesis.speak(utterance);
        } else {
          throw new Error("Speech synthesis not supported");
        }
      }
    } catch (error) {
      console.error("Error playing audio:", error);
      this.style.background = originalBg;
      this.innerHTML = originalHTML;

      const pronunciation =
        this.closest(".phrase-card").querySelector(
          ".pronunciation",
        ).textContent;
      alert(
        `Pronunciation: ${pronunciation}\n\nAudio playback is not available. Please use the pronunciation guide above.`,
      );
    }
  });
});
