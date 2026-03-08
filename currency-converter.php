<?php 
$currentPage = 'tools';
$pageTitle = 'Currency Converter';
$additionalCSS = ['css/currency-converter.css'];
include 'includes/header.php'; 
?>

<div class="tool-container">
    <div class="tool-header">
        <div class="tool-icon">
            <i class="fas fa-exchange-alt"></i>
        </div>
        <h1>Currency Converter</h1>
        <p>Convert USD to Cambodian Riel and other currencies</p>
        <div class="tool-stats">
            <span><i class="fas fa-eye"></i> 1.5K uses</span>
        </div>
    </div>

    <div class="converter-card">
        <div class="converter-section">
            <label>From</label>
            <div class="currency-input-group">
                <input type="number" id="fromAmount" value="1" min="0" step="0.01">
                <select id="fromCurrency">
                    <option value="USD" selected>USD - US Dollar</option>
                    <option value="KHR">KHR - Cambodian Riel</option>
                    <option value="EUR">EUR - Euro</option>
                    <option value="GBP">GBP - British Pound</option>
                    <option value="AUD">AUD - Australian Dollar</option>
                    <option value="CAD">CAD - Canadian Dollar</option>
                    <option value="JPY">JPY - Japanese Yen</option>
                    <option value="CNY">CNY - Chinese Yuan</option>
                    <option value="THB">THB - Thai Baht</option>
                    <option value="VND">VND - Vietnamese Dong</option>
                </select>
            </div>
        </div>

        <button class="swap-btn" id="swapBtn">
            <i class="fas fa-exchange-alt"></i>
        </button>

        <div class="converter-section">
            <label>To</label>
            <div class="currency-input-group">
                <input type="number" id="toAmount" readonly>
                <select id="toCurrency">
                    <option value="USD">USD - US Dollar</option>
                    <option value="KHR" selected>KHR - Cambodian Riel</option>
                    <option value="EUR">EUR - Euro</option>
                    <option value="GBP">GBP - British Pound</option>
                    <option value="AUD">AUD - Australian Dollar</option>
                    <option value="CAD">CAD - Canadian Dollar</option>
                    <option value="JPY">JPY - Japanese Yen</option>
                    <option value="CNY">CNY - Chinese Yuan</option>
                    <option value="THB">THB - Thai Baht</option>
                    <option value="VND">VND - Vietnamese Dong</option>
                </select>
            </div>
        </div>

        <div class="exchange-rate-info">
            <p id="rateInfo">1 USD = 4,100 KHR</p>
            <small>Exchange rates are approximate and for reference only</small>
        </div>
    </div>

    <div class="data-source-info">
        <p>
            <i class="fas fa-info-circle"></i> 
            Exchange rates are updated hourly from international financial data sources. 
            For official rates, please check with your bank or local money exchange.
            Last updated: <span id="lastUpdated"></span>
        </p>
    </div>

    <div class="quick-conversions">
        <h2>Quick Reference</h2>
        <div class="conversion-grid" id="quickConversions">
            <!-- Will be populated by JavaScript -->
        </div>
    </div>

    <div class="currency-tips">
        <h2><i class="fas fa-info-circle"></i> Currency Tips for Cambodia</h2>
        <div class="tips-grid">
            <div class="tip-card">
                <i class="fas fa-dollar-sign"></i>
                <h3>USD Widely Accepted</h3>
                <p>US Dollars are accepted everywhere in Cambodia. You'll often receive change in Riel.</p>
            </div>
            <div class="tip-card">
                <i class="fas fa-coins"></i>
                <h3>Small Bills</h3>
                <p>Carry small denominations ($1, $5, $10) as many vendors can't break large bills.</p>
            </div>
            <div class="tip-card">
                <i class="fas fa-credit-card"></i>
                <h3>ATMs Available</h3>
                <p>ATMs are common in cities and tourist areas. They dispense USD.</p>
            </div>
            <div class="tip-card">
                <i class="fas fa-hand-holding-usd"></i>
                <h3>Tipping</h3>
                <p>Tipping is appreciated but not mandatory. $1-2 for good service is standard.</p>
            </div>
        </div>
    </div>
</div>

<script src="js/currency-converter.js"></script>

<?php include 'includes/footer.php'; ?>
