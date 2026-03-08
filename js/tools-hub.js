// Tools Hub - Load and Display Saved Plans

// Load all saved plans on page load
document.addEventListener("DOMContentLoaded", () => {
  loadSavedBudgets();
  loadSavedItineraries();
  loadSavedPackingLists();
  checkEmptyState();
});

// Load Budget Plans
function loadSavedBudgets() {
  const budgetPlansList = document.getElementById("budgetPlansList");
  const savedBudgets = JSON.parse(localStorage.getItem("savedBudgets") || "[]");

  if (savedBudgets.length === 0) {
    budgetPlansList.innerHTML =
      '<p class="no-items">No budget plans saved yet</p>';
    return;
  }

  budgetPlansList.innerHTML = savedBudgets
    .map(
      (plan, index) => `
        <div class="saved-item-card">
            <div class="saved-item-header">
                <div class="saved-item-info">
                    <h4>${plan.destination || "Cambodia Trip"}</h4>
                    <p class="saved-item-meta">
                        ${plan.days} days • ${plan.style} style
                    </p>
                </div>
                <div class="saved-item-cost">${plan.totalCost}</div>
            </div>
            <div class="saved-item-footer">
                <span class="saved-date">${formatDate(plan.timestamp)}</span>
                <div class="saved-item-actions">
                    <button class="btn-icon" onclick="viewBudgetPlan(${index})" title="View">
                        <span>👁️</span>
                    </button>
                    <button class="btn-icon" onclick="deleteBudgetPlan(${index})" title="Delete">
                        <span>🗑️</span>
                    </button>
                </div>
            </div>
        </div>
    `,
    )
    .join("");
}

// Load Itineraries
function loadSavedItineraries() {
  const itinerariesList = document.getElementById("itinerariesList");
  const savedItineraries = JSON.parse(
    localStorage.getItem("savedItineraries") || "[]",
  );

  if (savedItineraries.length === 0) {
    itinerariesList.innerHTML =
      '<p class="no-items">No itineraries saved yet</p>';
    return;
  }

  itinerariesList.innerHTML = savedItineraries
    .map(
      (itinerary, index) => `
        <div class="saved-item-card">
            <div class="saved-item-header">
                <div class="saved-item-info">
                    <h4>${itinerary.title || "My Cambodia Trip"}</h4>
                    <p class="saved-item-meta">
                        ${itinerary.days || 0} days • ${itinerary.destinations || 0} destinations
                    </p>
                </div>
            </div>
            <div class="saved-item-footer">
                <span class="saved-date">${formatDate(itinerary.timestamp)}</span>
                <div class="saved-item-actions">
                    <button class="btn-icon" onclick="viewItinerary(${index})" title="View">
                        <span>👁️</span>
                    </button>
                    <button class="btn-icon" onclick="deleteItinerary(${index})" title="Delete">
                        <span>🗑️</span>
                    </button>
                </div>
            </div>
        </div>
    `,
    )
    .join("");
}

// Load Packing Lists
function loadSavedPackingLists() {
  const packingListsList = document.getElementById("packingListsList");
  const savedLists = JSON.parse(
    localStorage.getItem("savedPackingLists") || "[]",
  );

  if (savedLists.length === 0) {
    packingListsList.innerHTML =
      '<p class="no-items">No packing lists saved yet</p>';
    return;
  }

  packingListsList.innerHTML = savedLists
    .map(
      (list, index) => `
        <div class="saved-item-card">
            <div class="saved-item-header">
                <div class="saved-item-info">
                    <h4>${list.title || "Packing List"}</h4>
                    <p class="saved-item-meta">
                        ${list.items || 0} items • ${list.category || "General"}
                    </p>
                </div>
            </div>
            <div class="saved-item-footer">
                <span class="saved-date">${formatDate(list.timestamp)}</span>
                <div class="saved-item-actions">
                    <button class="btn-icon" onclick="viewPackingList(${index})" title="View">
                        <span>👁️</span>
                    </button>
                    <button class="btn-icon" onclick="deletePackingList(${index})" title="Delete">
                        <span>🗑️</span>
                    </button>
                </div>
            </div>
        </div>
    `,
    )
    .join("");
}

// Check if all lists are empty
function checkEmptyState() {
  const budgets = JSON.parse(localStorage.getItem("savedBudgets") || "[]");
  const itineraries = JSON.parse(
    localStorage.getItem("savedItineraries") || "[]",
  );
  const packingLists = JSON.parse(
    localStorage.getItem("savedPackingLists") || "[]",
  );

  const isEmpty =
    budgets.length === 0 &&
    itineraries.length === 0 &&
    packingLists.length === 0;

  document.getElementById("savedPlansContainer").style.display = isEmpty
    ? "none"
    : "block";
  document.getElementById("emptyState").style.display = isEmpty
    ? "flex"
    : "none";
}

// Format date
function formatDate(timestamp) {
  if (!timestamp) return "Recently";
  const date = new Date(timestamp);
  const now = new Date();
  const diffTime = Math.abs(now - date);
  const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

  if (diffDays === 0) return "Today";
  if (diffDays === 1) return "Yesterday";
  if (diffDays < 7) return `${diffDays} days ago`;
  if (diffDays < 30) return `${Math.floor(diffDays / 7)} weeks ago`;
  return date.toLocaleDateString();
}

// View Budget Plan
function viewBudgetPlan(index) {
  const savedBudgets = JSON.parse(localStorage.getItem("savedBudgets") || "[]");
  const plan = savedBudgets[index];

  // Store selected plan and redirect to calculator
  localStorage.setItem("viewBudgetPlan", JSON.stringify(plan));
  window.location.href = "budget-calculator.html";
}

// Delete Budget Plan
function deleteBudgetPlan(index) {
  if (!confirm("Are you sure you want to delete this budget plan?")) return;

  const savedBudgets = JSON.parse(localStorage.getItem("savedBudgets") || "[]");
  savedBudgets.splice(index, 1);
  localStorage.setItem("savedBudgets", JSON.stringify(savedBudgets));

  loadSavedBudgets();
  checkEmptyState();
}

// View Itinerary
function viewItinerary(index) {
  const savedItineraries = JSON.parse(
    localStorage.getItem("savedItineraries") || "[]",
  );
  const itinerary = savedItineraries[index];

  localStorage.setItem("viewItinerary", JSON.stringify(itinerary));
  window.location.href = "itinerary-builder.html";
}

// Delete Itinerary
function deleteItinerary(index) {
  if (!confirm("Are you sure you want to delete this itinerary?")) return;

  const savedItineraries = JSON.parse(
    localStorage.getItem("savedItineraries") || "[]",
  );
  savedItineraries.splice(index, 1);
  localStorage.setItem("savedItineraries", JSON.stringify(savedItineraries));

  loadSavedItineraries();
  checkEmptyState();
}

// View Packing List
function viewPackingList(index) {
  const savedLists = JSON.parse(
    localStorage.getItem("savedPackingLists") || "[]",
  );
  const list = savedLists[index];

  localStorage.setItem("viewPackingList", JSON.stringify(list));
  window.location.href = "packing-list.html";
}

// Delete Packing List
function deletePackingList(index) {
  if (!confirm("Are you sure you want to delete this packing list?")) return;

  const savedLists = JSON.parse(
    localStorage.getItem("savedPackingLists") || "[]",
  );
  savedLists.splice(index, 1);
  localStorage.setItem("savedPackingLists", JSON.stringify(savedLists));

  loadSavedPackingLists();
  checkEmptyState();
}

// Clear All Plans
document.getElementById("clearAllBtn")?.addEventListener("click", () => {
  if (
    !confirm(
      "Are you sure you want to delete ALL saved plans? This cannot be undone.",
    )
  )
    return;

  localStorage.removeItem("savedBudgets");
  localStorage.removeItem("savedItineraries");
  localStorage.removeItem("savedPackingLists");

  loadSavedBudgets();
  loadSavedItineraries();
  loadSavedPackingLists();
  checkEmptyState();

  alert("All saved plans have been deleted.");
});
