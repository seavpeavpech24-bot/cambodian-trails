// Siem Reap destinations data
const destinations = [
  {
    id: 1,
    name: "Pub Street",
    category: "city",
    lat: 13.3633,
    lng: 103.8564,
    description:
      "The heart of Siem Reap's nightlife with restaurants, bars, street food, and vibrant atmosphere.",
    image:
      "https://i.pinimg.com/1200x/38/e7/6f/38e76f3e31609410d50d88dac39b4451.jpg",
  },
  {
    id: 2,
    name: "Angkor Village Apsara Theatre",
    category: "temple",
    lat: 13.3547,
    lng: 103.8583,
    description:
      "Traditional Khmer dance performances with authentic costumes and live music in a beautiful setting.",
    image: "https://i.pinimg.com/1200x/d0/e9/69/d0e969aea3edcd4ccb235c6ce6ae0a0b.jpg",
  },
  {
    id: 3,
    name: "Phnom Bakheng",
    category: "temple",
    lat: 13.4092,
    lng: 103.8583,
    description:
      "Ancient hilltop temple famous for spectacular sunset views over Angkor Wat and the surrounding jungle.",
    image: "https://i.pinimg.com/736x/c8/e7/15/c8e7159cdda0f9923127dcd85675be08.jpg",
  },
  {
    id: 4,
    name: "Phnom Kulen National Park",
    category: "nature",
    lat: 13.5833,
    lng: 104.0167,
    description:
      "Sacred mountain with stunning waterfalls, ancient carvings, and the birthplace of the Khmer Empire.",
    image: "https://i.pinimg.com/736x/38/97/1b/38971bc352da719abd689916a302c40f.jpg",
  },
  {
    id: 5,
    name: "Tonle Sap Lake",
    category: "nature",
    lat: 13.1667,
    lng: 103.8667,
    description:
      "Southeast Asia's largest freshwater lake with floating villages and unique ecosystem.",
    image: "https://i.pinimg.com/1200x/83/6f/35/836f352d68e26c625eb8cc1b453f8e3d.jpg",
  },
  {
    id: 6,
    name: "Angkor Wildlife & Aquarium",
    category: "nature",
    lat: 13.3456,
    lng: 103.8389,
    description:
      "Conservation center showcasing Cambodia's wildlife and freshwater fish species.",
    image: "https://i.pinimg.com/1200x/ee/b2/e6/eeb2e630b14a2441904a4a09a47496ef.jpg",
  },
  {
    id: 7,
    name: "Angkor Eye Ferris Wheel",
    category: "city",
    lat: 13.3611,
    lng: 103.8556,
    description:
      "Giant observation wheel offering panoramic views of Siem Reap city and surrounding countryside.",
    image: "https://i.pinimg.com/736x/5c/ce/99/5cce995c6a4d1ed11d1d4b9758d72cfb.jpg",
  },
  {
    id: 8,
    name: "Banteay Srei Butterfly Centre",
    category: "nature",
    lat: 13.6067,
    lng: 104.0333,
    description:
      "Cambodia's largest butterfly sanctuary with hundreds of species in a natural habitat setting.",
    image: "https://i.pinimg.com/1200x/2b/c1/6e/2bc16e1b37dca2944c2da4cbb827a7a0.jpg",
  },
  {
    id: 9,
    name: "Angkor Speedway (Go-Kart)",
    category: "city",
    lat: 13.3489,
    lng: 103.8278,
    description:
      "Professional go-kart racing track offering high-speed thrills and family-friendly fun.",
    image: "https://i.pinimg.com/736x/f3/75/fe/f375fe99fcfdbcf1d557d04d9f2a838d.jpg",
  },
  {
    id: 10,
    name: "Wake Park Cambodia",
    category: "beach",
    lat: 13.3722,
    lng: 103.8333,
    description:
      "Cable wakeboarding park with obstacles, jumps, and lessons for all skill levels.",
    image: "https://i.pinimg.com/1200x/e3/5f/a9/e35fa9f2b207e96c8183a99132f36a0e.jpg",
  },
];

let map;
let markers = [];
let activeMarker = null;
let currentCategory = "all";
let currentLayer = "street";

// Initialize Leaflet Map
function initMap() {
  // Center on Siem Reap
  map = L.map("map").setView([13.3671, 103.8448], 11);

  // Add OpenStreetMap tile layer
  L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
    attribution: "© OpenStreetMap contributors",
    maxZoom: 19,
  }).addTo(map);

  // Add markers for all destinations
  addMarkers();

  // Populate destinations list
  renderDestinationsList();

  // Setup event listeners
  setupEventListeners();
}

// Add markers to map
function addMarkers() {
  // Clear existing markers
  markers.forEach((m) => map.removeLayer(m.marker));
  markers = [];

  const filteredDestinations =
    currentCategory === "all"
      ? destinations
      : destinations.filter((d) => d.category === currentCategory);

  filteredDestinations.forEach((destination) => {
    const icon = L.divIcon({
      className: "custom-marker",
      html: `<div class="marker-pin" style="background-color: ${getMarkerColor(destination.category)}">
                      <i class="${getMarkerIcon(destination.category)}"></i>
                   </div>`,
      iconSize: [30, 42],
      iconAnchor: [15, 42],
      popupAnchor: [0, -42],
    });

    const marker = L.marker([destination.lat, destination.lng], { icon })
      .addTo(map)
      .on("click", () => {
        showDestinationInfo(destination);
        highlightMarker(marker);
      });

    markers.push({ marker, destination });
  });
}

// Get marker color based on category
function getMarkerColor(category) {
  const colors = {
    temple: "#FF6B6B",
    beach: "#4ECDC4",
    nature: "#95E1D3",
    city: "#F38181",
    all: "#AA96DA",
  };
  return colors[category] || colors.all;
}

// Get marker icon based on category
function getMarkerIcon(category) {
  const icons = {
    temple: "fas fa-gopuram",
    beach: "fas fa-umbrella-beach",
    nature: "fas fa-tree",
    city: "fas fa-city",
    all: "fas fa-map-marker-alt",
  };
  return icons[category] || icons.all;
}

// Highlight selected marker
function highlightMarker(marker) {
  // Reset previous marker
  if (activeMarker) {
    activeMarker.getElement()?.classList.remove("marker-bounce");
  }

  // Highlight new marker
  const element = marker.getElement();
  if (element) {
    element.classList.add("marker-bounce");
    activeMarker = marker;

    // Stop bouncing after 2 seconds
    setTimeout(() => {
      element.classList.remove("marker-bounce");
    }, 2000);
  }
}

// Render destinations list
function renderDestinationsList() {
  const list = document.getElementById("destinationsList");
  const filteredDestinations =
    currentCategory === "all"
      ? destinations
      : destinations.filter((d) => d.category === currentCategory);

  list.innerHTML = filteredDestinations
    .map(
      (dest) => `
        <div class="destination-item" data-id="${dest.id}">
            <span class="category-tag">${dest.category}</span>
            <h4>${dest.name}</h4>
            <p>${dest.description.substring(0, 80)}...</p>
        </div>
    `,
    )
    .join("");

  // Add click listeners
  document.querySelectorAll(".destination-item").forEach((item) => {
    item.addEventListener("click", function () {
      const id = parseInt(this.getAttribute("data-id"));
      const destination = destinations.find((d) => d.id === id);
      if (destination) {
        showDestinationInfo(destination);
        map.setView([destination.lat, destination.lng], 12);

        // Highlight marker
        const markerObj = markers.find((m) => m.destination.id === id);
        if (markerObj) {
          highlightMarker(markerObj.marker);
        }
      }
    });
  });
}

// Show destination info modal
function showDestinationInfo(destination) {
  const modal = document.getElementById("infoModal");
  const content = document.getElementById("modalContent");

  content.innerHTML = `
        <img src="${destination.image}" alt="${destination.name}" class="modal-image">
        <h2 class="modal-title">${destination.name}</h2>
        <p class="modal-location">
            <i class="fas fa-map-marker-alt"></i>
            ${destination.category.charAt(0).toUpperCase() + destination.category.slice(1)}
        </p>
        <p class="modal-description">${destination.description}</p>
        <div class="modal-actions">
            <button class="modal-btn primary" onclick="getDirections(${destination.lat}, ${destination.lng})">
                <i class="fas fa-directions"></i> Get Directions
            </button>
            <button class="modal-btn secondary" onclick="saveDestination(${destination.id})">
                <i class="fas fa-bookmark"></i> Save
            </button>
        </div>
    `;

  modal.classList.add("active");
}

// Setup event listeners
function setupEventListeners() {
  // Close modal
  document.getElementById("closeInfo").addEventListener("click", () => {
    document.getElementById("infoModal").classList.remove("active");
  });

  // Filter buttons
  document.querySelectorAll(".filter-btn").forEach((btn) => {
    btn.addEventListener("click", function () {
      document
        .querySelectorAll(".filter-btn")
        .forEach((b) => b.classList.remove("active"));
      this.classList.add("active");
      currentCategory = this.getAttribute("data-category");
      addMarkers();
      renderDestinationsList();
    });
  });

  // Center map button
  document.getElementById("centerMap").addEventListener("click", () => {
    map.setView([13.3671, 103.8448], 11);
  });

  // Toggle satellite view
  document
    .getElementById("toggleSatellite")
    .addEventListener("click", function () {
      // Remove all layers
      map.eachLayer((layer) => {
        if (layer instanceof L.TileLayer) {
          map.removeLayer(layer);
        }
      });

      // Toggle between street and satellite
      if (currentLayer === "street") {
        L.tileLayer(
          "https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}",
          {
            attribution: "Tiles © Esri",
          },
        ).addTo(map);
        currentLayer = "satellite";
        this.style.background = "#4ECDC4";
      } else {
        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
          attribution: "© OpenStreetMap contributors",
        }).addTo(map);
        currentLayer = "street";
        this.style.background = "";
      }
    });

  // Search functionality
  document.getElementById("searchBtn").addEventListener("click", performSearch);
  document.getElementById("mapSearch").addEventListener("keypress", (e) => {
    if (e.key === "Enter") performSearch();
  });
}

// Search destinations
function performSearch() {
  const query = document.getElementById("mapSearch").value.toLowerCase();
  if (!query) return;

  const found = destinations.find(
    (d) =>
      d.name.toLowerCase().includes(query) ||
      d.description.toLowerCase().includes(query),
  );

  if (found) {
    showDestinationInfo(found);
    map.setView([found.lat, found.lng], 12);

    const markerObj = markers.find((m) => m.destination.id === found.id);
    if (markerObj) {
      highlightMarker(markerObj.marker);
    }
  } else {
    alert("Destination not found. Try another search term.");
  }
}

// Get directions (opens OpenStreetMap)
function getDirections(lat, lng) {
  window.open(
    `https://www.openstreetmap.org/directions?to=${lat},${lng}`,
    "_blank",
  );
}

// Save destination
function saveDestination(id) {
  let saved = JSON.parse(localStorage.getItem("savedDestinations") || "[]");
  if (!saved.includes(id)) {
    saved.push(id);
    localStorage.setItem("savedDestinations", JSON.stringify(saved));
    alert("Destination saved!");
  } else {
    alert("Already saved!");
  }
}

// Initialize map when page loads
document.addEventListener("DOMContentLoaded", initMap);
