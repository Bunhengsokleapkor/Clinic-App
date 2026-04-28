<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MediCare — Healthcare Management</title>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
@vite('resources/css/app.css')
</head>
<body>

<!-- SIDEBAR -->
<aside class="sidebar">
  <div class="logo">
    <div class="logo-lockup">
      <div class="logo-icon">
        <img src="https://images.vexels.com/media/users/3/282288/isolated/preview/9ded914031de73173d19cf30839fef76-hospital-surgery-logo.png" width="36" height="36" style="object-fit:contain;border-radius:6px">
      </div>
      <div>
        <div class="logo-mark">MediCare</div>
        <div class="logo-sub">Healthcare Management</div>
      </div>
    </div>
  </div>

  <div class="nav-section">
    <div class="nav-label">Overview</div>
    <button class="nav-item active" onclick="navigate('dashboard',this)">
      <svg class="icon" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="1" y="1" width="6" height="6" rx="1.5"/><rect x="9" y="1" width="6" height="6" rx="1.5"/><rect x="1" y="9" width="6" height="6" rx="1.5"/><rect x="9" y="9" width="6" height="6" rx="1.5"/></svg>
      Dashboard
    </button>
  </div>

  <div class="nav-section">
    <div class="nav-label">Collections</div>
    <button class="nav-item" onclick="navigate('patients',this)">
      <svg class="icon" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="8" cy="5" r="3"/><path d="M2 14c0-3.314 2.686-6 6-6s6 2.686 6 6"/></svg>
      Patients
    </button>
    <button class="nav-item" onclick="navigate('doctors',this)">
      <svg class="icon" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M8 1v14M5 4h6M3 8h10"/></svg>
      Doctors
    </button>
    <button class="nav-item" onclick="navigate('appointments',this)">
      <svg class="icon" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="1" y="3" width="14" height="12" rx="2"/><path d="M5 1v4M11 1v4M1 7h14"/></svg>
      Appointments
    </button>
    <button class="nav-item" onclick="navigate('billing',this)">
      <svg class="icon" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="1" y="2" width="14" height="12" rx="2"/><path d="M5 8h6M5 11h3"/></svg>
      Billing
    </button>
    <button class="nav-item" onclick="navigate('inventory',this)">
      <svg class="icon" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 13V5l6-4 6 4v8"/><rect x="5.5" y="8" width="5" height="5"/></svg>
      Inventory
    </button>
  </div>

  <div class="nav-section">
    <div class="nav-label">Forms</div>
    <button class="nav-item" onclick="navigate('form-patient',this)">
      <svg class="icon" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M8 1v14M1 8h14" stroke-linecap="round"/></svg>
      Patient Registration
    </button>
    <button class="nav-item" onclick="navigate('form-doctor',this)">
      <svg class="icon" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M8 1v14M1 8h14" stroke-linecap="round"/></svg>
      Doctor Registration
    </button>
    <button class="nav-item" onclick="navigate('form-appointment',this)">
      <svg class="icon" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M8 1v14M1 8h14" stroke-linecap="round"/></svg>
      Appointment
    </button>
    <button class="nav-item" onclick="navigate('form-billing',this)">
      <svg class="icon" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M8 1v14M1 8h14" stroke-linecap="round"/></svg>
      Billing Entry
    </button>
    <button class="nav-item" onclick="navigate('form-inventory',this)">
      <svg class="icon" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M8 1v14M1 8h14" stroke-linecap="round"/></svg>
      Inventory Entry
    </button>
  </div>

  <div class="nav-section">
    <div class="nav-label">Reports</div>
    <button class="nav-item" onclick="navigate('rpt-appt-patient',this)">
      <svg class="icon" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 14V4l4-3h8v13"/><path d="M2 7h12M6 1v6"/></svg>
      Appts by Patient
    </button>
    <button class="nav-item" onclick="navigate('rpt-appt-doctor',this)">
      <svg class="icon" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 14V4l4-3h8v13"/><path d="M2 7h12M6 1v6"/></svg>
      Appts by Doctor
    </button>
    <button class="nav-item" onclick="navigate('rpt-billing-history',this)">
      <svg class="icon" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 14V4l4-3h8v13"/><path d="M2 7h12M6 1v6"/></svg>
      Billing History
    </button>
    <button class="nav-item" onclick="navigate('rpt-expiry',this)">
      <svg class="icon" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 14V4l4-3h8v13"/><path d="M2 7h12M6 1v6"/></svg>
      Near Expiration
    </button>
    <button class="nav-item" onclick="navigate('rpt-unpaid',this)">
      <svg class="icon" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 14V4l4-3h8v13"/><path d="M2 7h12M6 1v6"/></svg>
      Unpaid Billing
    </button>
  </div>

  <div class="sidebar-footer">MediCore v1.0 &nbsp;·&nbsp; 2026</div>
</aside>

<!-- MAIN CONTENT -->
<main class="main">
  <header class="topbar">
    <div style="display:flex;align-items:center">
      <span class="topbar-title" id="topbar-title">Dashboard</span>
      <span class="topbar-badge" id="topbar-badge">Overview</span>
    </div>
    <div style="display:flex;align-items:center;gap:10px">
      <span style="font-size:13px;color:var(--gray-400)">April 26, 2026</span>
      <div class="avatar">AD</div>
    </div>
  </header>

  <div class="content">

    <!-- DASHBOARD -->
    <div class="page active" id="page-dashboard">
      <div class="welcome-banner">
        <div class="welcome-title">Good evening</div>
        <div class="welcome-sub">Welcome to Medicare</div>
      </div>
      <div class="stats-grid">
        <div class="stat-card"><div class="stat-label">Total Patients</div><div class="stat-value" id="st-patients">0</div><div class="stat-sub">Registered</div></div>
        <div class="stat-card"><div class="stat-label">Total Doctors</div><div class="stat-value" id="st-doctors">0</div><div class="stat-sub">Active staff</div></div>
        <div class="stat-card"><div class="stat-label">Appointments</div><div class="stat-value" id="st-appts">0</div><div class="stat-sub">All time</div></div>
        <div class="stat-card"><div class="stat-label">Unpaid Bills</div><div class="stat-value" id="st-unpaid">0</div><div class="stat-sub">Pending collection</div></div>
      </div>
      <div class="quick-grid">
        <div class="quick-card" onclick="navigate('form-patient',document.querySelector('[onclick*=form-patient]'))">
          <div class="quick-icon"><svg width="18" height="18" viewBox="0 0 16 16" fill="none" stroke="var(--blue-600)" stroke-width="1.5"><path d="M8 1v14M1 8h14" stroke-linecap="round"/></svg></div>
          <div class="quick-label">Register Patient</div>
          <div class="quick-desc">Add a new patient record</div>
        </div>
        <div class="quick-card" onclick="navigate('form-appointment',document.querySelector('[onclick*=form-appointment]'))">
          <div class="quick-icon"><svg width="18" height="18" viewBox="0 0 16 16" fill="none" stroke="var(--blue-600)" stroke-width="1.5"><rect x="1" y="3" width="14" height="12" rx="2"/><path d="M5 1v4M11 1v4M1 7h14"/></svg></div>
          <div class="quick-label">Book Appointment</div>
          <div class="quick-desc">Schedule a new appointment</div>
        </div>
        <div class="quick-card" onclick="navigate('rpt-expiry',document.querySelector('[onclick*=rpt-expiry]'))">
          <div class="quick-icon"><svg width="18" height="18" viewBox="0 0 16 16" fill="none" stroke="#BA7517" stroke-width="1.5"><circle cx="8" cy="8" r="7"/><path d="M8 5v3l2 2"/></svg></div>
          <div class="quick-label">Check Expiry</div>
          <div class="quick-desc">Items near expiration date</div>
        </div>
      </div>
      <div class="table-card">
        <div class="table-header"><span class="table-title">Recent Appointments</span></div>
        <table>
          <thead><tr><th>Patient</th><th>Doctor</th><th>Date</th><th>Status</th></tr></thead>
          <tbody id="dash-appt-table"><tr><td colspan="4" style="text-align:center;color:var(--gray-400);padding:28px">No appointments yet. <a href="#" onclick="navigate('form-appointment',null);return false" style="color:var(--blue-600)">Book one →</a></td></tr></tbody>
        </table>
      </div>
    </div>

    <!-- PATIENTS COLLECTION -->
    <div class="page" id="page-patients">
      <div class="table-card">
        <div class="table-header">
          <span class="table-title">All Patients</span>
          <button class="btn btn-primary" onclick="navigate('form-patient',document.querySelector('[onclick*=form-patient]'))">+ New Patient</button>
        </div>
        <table>
          <thead><tr><th class="id-col">ID</th><th>Name</th><th>DOB</th><th>Gender</th><th>Phone</th><th>Insurance</th></tr></thead>
          <tbody id="patients-table"><tr><td colspan="6" style="text-align:center;color:var(--gray-400);padding:28px">No patients registered yet.</td></tr></tbody>
        </table>
      </div>
    </div>

    <!-- DOCTORS COLLECTION -->
    <div class="page" id="page-doctors">
      <div class="table-card">
        <div class="table-header">
          <span class="table-title">All Doctors</span>
          <button class="btn btn-primary" onclick="navigate('form-doctor',document.querySelector('[onclick*=form-doctor]'))">+ New Doctor</button>
        </div>
        <table>
          <thead><tr><th class="id-col">ID</th><th>Name</th><th>Specialization</th><th>Schedule</th></tr></thead>
          <tbody id="doctors-table"><tr><td colspan="4" style="text-align:center;color:var(--gray-400);padding:28px">No doctors registered yet.</td></tr></tbody>
        </table>
      </div>
    </div>

    <!-- APPOINTMENTS COLLECTION -->
    <div class="page" id="page-appointments">
      <div class="table-card">
        <div class="table-header">
          <span class="table-title">All Appointments</span>
          <button class="btn btn-primary" onclick="navigate('form-appointment',document.querySelector('[onclick*=form-appointment]'))">+ New Appointment</button>
        </div>
        <table>
          <thead><tr><th class="id-col">ID</th><th>Patient</th><th>Doctor</th><th>Date & Time</th><th>Status</th></tr></thead>
          <tbody id="appointments-table"><tr><td colspan="5" style="text-align:center;color:var(--gray-400);padding:28px">No appointments booked yet.</td></tr></tbody>
        </table>
      </div>
    </div>

    <!-- BILLING COLLECTION -->
    <div class="page" id="page-billing">
      <div class="table-card">
        <div class="table-header">
          <span class="table-title">All Billing Records</span>
          <button class="btn btn-primary" onclick="navigate('form-billing',document.querySelector('[onclick*=form-billing]'))">+ New Bill</button>
        </div>
        <table>
          <thead><tr><th class="id-col">ID</th><th>Patient</th><th>Amount</th><th>Date</th><th>Status</th></tr></thead>
          <tbody id="billing-table"><tr><td colspan="5" style="text-align:center;color:var(--gray-400);padding:28px">No billing records yet.</td></tr></tbody>
        </table>
      </div>
    </div>

    <!-- INVENTORY COLLECTION -->
    <div class="page" id="page-inventory">
      <div class="table-card">
        <div class="table-header">
          <span class="table-title">Inventory</span>
          <button class="btn btn-primary" onclick="navigate('form-inventory',document.querySelector('[onclick*=form-inventory]'))">+ Add Item</button>
        </div>
        <table>
          <thead><tr><th class="id-col">ID</th><th>Item Name</th><th>Quantity</th><th>Expiration Date</th><th>Days Left</th></tr></thead>
          <tbody id="inventory-table"><tr><td colspan="5" style="text-align:center;color:var(--gray-400);padding:28px">No inventory items added yet.</td></tr></tbody>
        </table>
      </div>
    </div>

    <!-- FORM: PATIENT -->
    <div class="page" id="page-form-patient">
      <div class="form-card">
        <div class="form-title">Patient Registration</div>
        <div class="form-subtitle">Enter complete patient information below</div>
        <div class="section-label">Personal Information</div>
        <div class="form-grid cols-2">
          <div class="field"><label>First Name *</label><input type="text" id="p-fname" placeholder="Jane"></div>
          <div class="field"><label>Last Name *</label><input type="text" id="p-lname" placeholder="Doe"></div>
          <div class="field"><label>Date of Birth *</label><input type="date" id="p-dob"></div>
          <div class="field"><label>Gender</label>
            <select id="p-gender"><option value="">Select</option><option>Male</option><option>Female</option></select>
          </div>
          <div class="field"><label>Phone</label><input type="tel" id="p-phone" placeholder="+1 (555) 000-0000"></div>
          <div class="field"><label>Address</label><input type="text" id="p-address" placeholder="123 Main St, City"></div>
          <div class="field span-2"><label>Insurance Information</label><textarea id="p-insurance" placeholder="Insurance provider, policy number, group number..."></textarea></div>
        </div>
        <div class="form-actions">
          <button class="btn btn-primary" onclick="savePatient()">Save Patient</button>
          <button class="btn btn-secondary" onclick="resetForm('form-patient')">Reset</button>
        </div>
      </div>
    </div>

    <!-- FORM: DOCTOR -->
    <div class="page" id="page-form-doctor">
      <div class="form-card">
        <div class="form-title">Doctor Registration</div>
        <div class="form-subtitle">Add a new medical professional to the system</div>
        <div class="section-label">Professional Details</div>
        <div class="form-grid cols-2">
          <div class="field"><label>First Name *</label><input type="text" id="d-fname" placeholder="Dr. John"></div>
          <div class="field"><label>Last Name *</label><input type="text" id="d-lname" placeholder="Smith"></div>
          <div class="field"><label>Specialization *</label><input type="text" id="d-spec" placeholder="Cardiology, Pediatrics..."></div>
          <div class="field"><label>Schedule</label><input type="text" id="d-schedule" placeholder="Mon-Fri 8am-5pm"></div>
        </div>
        <div class="form-actions">
          <button class="btn btn-primary" onclick="saveDoctor()">Save Doctor</button>
          <button class="btn btn-secondary" onclick="resetForm('form-doctor')">Reset</button>
        </div>
      </div>
    </div>

    <!-- FORM: APPOINTMENT -->
    <div class="page" id="page-form-appointment">
      <div class="form-card">
        <div class="form-title">Book Appointment</div>
        <div class="form-subtitle">Schedule a patient-doctor appointment</div>
        <div class="form-grid cols-2">
          <div class="field"><label>Patient *</label><select id="a-patient"><option value="">Select patient</option></select></div>
          <div class="field"><label>Doctor *</label><select id="a-doctor"><option value="">Select doctor</option></select></div>
          <div class="field"><label>Date & Time *</label><input type="datetime-local" id="a-datetime"></div>
          <div class="field"><label>Status</label>
            <select id="a-status"><option>Scheduled</option><option>Completed</option><option>Cancelled</option><option>No-show</option></select>
          </div>
        </div>
        <div class="form-actions">
          <button class="btn btn-primary" onclick="saveAppointment()">Book Appointment</button>
          <button class="btn btn-secondary" onclick="resetForm('form-appointment')">Reset</button>
        </div>
      </div>
    </div>

    <!-- FORM: BILLING -->
    <div class="page" id="page-form-billing">
      <div class="form-card">
        <div class="form-title">Billing Entry</div>
        <div class="form-subtitle">Create a new billing record for a patient</div>
        <div class="form-grid cols-2">
          <div class="field"><label>Patient *</label><select id="b-patient"><option value="">Select patient</option></select></div>
          <div class="field"><label>Amount ($) *</label><input type="number" id="b-amount" placeholder="0.00" min="0" step="0.01"></div>
          <div class="field"><label>Billing Date *</label><input type="date" id="b-date"></div>
          <div class="field"><label>Payment Status</label>
            <select id="b-status"><option>Unpaid</option><option>Paid</option></select>
          </div>
        </div>
        <div class="form-actions">
          <button class="btn btn-primary" onclick="saveBilling()">Save Bill</button>
          <button class="btn btn-secondary" onclick="resetForm('form-billing')">Reset</button>
        </div>
      </div>
    </div>

    <!-- FORM: INVENTORY -->
    <div class="page" id="page-form-inventory">
      <div class="form-card">
        <div class="form-title">Add Inventory Item</div>
        <div class="form-subtitle">Add a medical supply or medication to inventory</div>
        <div class="form-grid cols-2">
          <div class="field span-2"><label>Item Name *</label><input type="text" id="i-name" placeholder="Amoxicillin 500mg, Surgical Gloves (L)..."></div>
          <div class="field"><label>Quantity *</label><input type="number" id="i-qty" placeholder="0" min="0"></div>
          <div class="field"><label>Expiration Date</label><input type="date" id="i-expiry"></div>
        </div>
        <div class="form-actions">
          <button class="btn btn-primary" onclick="saveInventory()">Add to Inventory</button>
          <button class="btn btn-secondary" onclick="resetForm('form-inventory')">Reset</button>
        </div>
      </div>
    </div>

    <!-- REPORT: APPTS BY PATIENT -->
    <div class="page" id="page-rpt-appt-patient">
      <div class="report-filters">
        <div class="filter-field"><label>Filter by Patient</label><select id="rpt-ap-patient" onchange="renderRptApptPatient()"><option value="">All patients</option></select></div>
      </div>
      <div class="result-meta" id="rpt-ap-meta"></div>
      <div class="table-card">
        <table>
          <thead><tr><th>Patient</th><th>Doctor</th><th>Date & Time</th><th>Status</th></tr></thead>
          <tbody id="rpt-ap-table"></tbody>
        </table>
      </div>
    </div>

    <!-- REPORT: APPTS BY DOCTOR -->
    <div class="page" id="page-rpt-appt-doctor">
      <div class="report-filters">
        <div class="filter-field"><label>Filter by Doctor</label><select id="rpt-ad-doctor" onchange="renderRptApptDoctor()"><option value="">All doctors</option></select></div>
        <button class="btn btn-primary" onclick="renderRptApptDoctor()">Run Report</button>
      </div>
      <div class="result-meta" id="rpt-ad-meta"></div>
      <div class="table-card">
        <table>
          <thead><tr><th>Doctor</th><th>Patient</th><th>Date & Time</th><th>Status</th></tr></thead>
          <tbody id="rpt-ad-table"></tbody>
        </table>
      </div>
    </div>

    <!-- REPORT: BILLING HISTORY -->
    <div class="page" id="page-rpt-billing-history">
      <div class="report-filters">
        <div class="filter-field"><label>Filter by Patient</label><select id="rpt-bh-patient" onchange="renderRptBillingHistory()"><option value="">All patients</option></select></div>
        <button class="btn btn-primary" onclick="renderRptBillingHistory()">Run Report</button>
      </div>
      <div class="result-meta" id="rpt-bh-meta"></div>
      <div class="table-card">
        <table>
          <thead><tr><th>Patient</th><th>Amount</th><th>Date</th><th>Status</th></tr></thead>
          <tbody id="rpt-bh-table"></tbody>
        </table>
      </div>
    </div>

    <!-- REPORT: NEAR EXPIRATION -->
    <div class="page" id="page-rpt-expiry">
      <div class="report-filters">
        <div class="filter-field"><label>Days threshold</label><select id="rpt-exp-days" onchange="renderRptExpiry()"><option value="30">Within 30 days</option><option value="60">Within 60 days</option><option value="90">Within 90 days</option><option value="365">Within 1 year</option></select></div>
        <button class="btn btn-primary" onclick="renderRptExpiry()">Run Report</button>
      </div>
      <div class="result-meta" id="rpt-exp-meta"></div>
      <div class="table-card">
        <table>
          <thead><tr><th>Item Name</th><th>Quantity</th><th>Expiration Date</th><th>Days Remaining</th></tr></thead>
          <tbody id="rpt-exp-table"></tbody>
        </table>
      </div>
    </div>

    <!-- REPORT: UNPAID BILLING -->
    <div class="page" id="page-rpt-unpaid">
      <div class="report-filters">
        <div class="filter-field"><label>Payment Status</label>
          <select id="rpt-up-status" onchange="renderRptUnpaid()">
            <option value="Unpaid">Unpaid</option>
            <option value="all">All unpaid</option>
          </select>
        </div>
        <button class="btn btn-primary" onclick="renderRptUnpaid()">Run Report</button>
      </div>
      <div class="result-meta" id="rpt-up-meta"></div>
      <div class="table-card">
        <table>
          <thead><tr><th>Patient</th><th>Amount</th><th>Date</th><th>Status</th></tr></thead>
          <tbody id="rpt-up-table"></tbody>
        </table>
      </div>
    </div>

  </div><!-- /content -->
</main>

<div id="toast"></div>

<script>
// ── DATA STORE ──────────────────────────────────────────────────
const DB = {
  patients:[],doctors:[],appointments:[],billing:[],inventory:[],
  nextId:{patients:1,doctors:1,appointments:1,billing:1,inventory:1}
};

const apiPaths = {
  patients: '/api/patients',
  doctors: '/api/doctors',
  appointments: '/api/appointments',
  billing: '/api/billings',
  inventory: '/api/inventory',
};

function normalizePatient(record) {
  return {
    id: Number(record.patient_id ?? record.id ?? 0),
    fname: record.first_name ?? record.fname ?? '',
    lname: record.last_name ?? record.lname ?? '',
    dob: record.dob ?? '',
    gender: record.gender ?? '',
    phone: record.phone ?? '',
    address: record.address ?? '',
    insurance: record.insurance_info ?? record.insurance ?? '',
  };
}

function normalizeDoctor(record) {
  return {
    id: Number(record.doctor_id ?? record.id ?? 0),
    fname: record.first_name ?? record.fname ?? '',
    lname: record.last_name ?? record.lname ?? '',
    spec: record.specialization ?? record.spec ?? '',
    schedule: record.schedule ?? '',
  };
}

function normalizeAppointment(record) {
  return {
    id: Number(record.appointment_id ?? record.id ?? 0),
    patientId: Number(record.patient_id ?? record.patientId ?? 0),
    doctorId: Number(record.doctor_id ?? record.doctorId ?? 0),
    datetime: record.appointment_date ?? record.datetime ?? '',
    status: record.status ?? '',
  };
}

function normalizeBilling(record) {
  return {
    id: Number(record.billing_id ?? record.id ?? 0),
    patientId: Number(record.patient_id ?? record.patientId ?? 0),
    amount: Number(record.amount ?? 0),
    date: record.billing_date ?? record.date ?? '',
    status: record.payment_status ?? record.status ?? '',
  };
}

function normalizeInventory(record) {
  return {
    id: Number(record.inventory_id ?? record.id ?? 0),
    name: record.item_name ?? record.name ?? '',
    qty: Number(record.quantity ?? record.qty ?? 0),
    expiry: record.expiration_date ?? record.expiry ?? '',
  };
}

function updateNextId(collection) {
  const maxId = DB[collection].reduce((highest, record) => Math.max(highest, Number(record.id ?? 0)), 0);
  DB.nextId[collection] = maxId + 1;
}

async function apiRequest(path, method, payload = null) {
  const response = await fetch(path, {
    method,
    headers: {
      'Accept': 'application/json',
      'Content-Type': 'application/json',
    },
    body: payload ? JSON.stringify(payload) : null,
  });

  if (!response.ok) {
    const text = await response.text();
    throw new Error(text || 'Request failed');
  }

  return response.json();
}

async function loadCollections() {
  const [patients, doctors, appointments, billing, inventory] = await Promise.all([
    apiRequest(apiPaths.patients, 'GET'),
    apiRequest(apiPaths.doctors, 'GET'),
    apiRequest(apiPaths.appointments, 'GET'),
    apiRequest(apiPaths.billing, 'GET'),
    apiRequest(apiPaths.inventory, 'GET'),
  ]);

  DB.patients = Array.isArray(patients) ? patients.map(normalizePatient) : [];
  DB.doctors = Array.isArray(doctors) ? doctors.map(normalizeDoctor) : [];
  DB.appointments = Array.isArray(appointments) ? appointments.map(normalizeAppointment) : [];
  DB.billing = Array.isArray(billing) ? billing.map(normalizeBilling) : [];
  DB.inventory = Array.isArray(inventory) ? inventory.map(normalizeInventory) : [];

  updateNextId('patients');
  updateNextId('doctors');
  updateNextId('appointments');
  updateNextId('billing');
  updateNextId('inventory');

  renderDashboard();
  renderPatientsTable();
  renderDoctorsTable();
  renderAppointmentsTable();
  renderBillingTable();
  renderInventoryTable();
}

// ── NAVIGATION ──────────────────────────────────────────────────
const pageLabels = {
  'dashboard':'Dashboard','patients':'Patients','doctors':'Doctors',
  'appointments':'Appointments','billing':'Billing','inventory':'Inventory',
  'form-patient':'Patient Registration','form-doctor':'Doctor Registration',
  'form-appointment':'Book Appointment','form-billing':'Billing Entry',
  'form-inventory':'Add Inventory',
  'rpt-appt-patient':'Appointments by Patient','rpt-appt-doctor':'Appointments by Doctor',
  'rpt-billing-history':'Billing History','rpt-expiry':'Near Expiration',
  'rpt-unpaid':'Unpaid Billing'
};
const pageBadges = {
  'dashboard':'Overview','patients':'Collection','doctors':'Collection',
  'appointments':'Collection','billing':'Collection','inventory':'Collection',
  'form-patient':'Form','form-doctor':'Form','form-appointment':'Form',
  'form-billing':'Form','form-inventory':'Form',
  'rpt-appt-patient':'Report','rpt-appt-doctor':'Report',
  'rpt-billing-history':'Report','rpt-expiry':'Report','rpt-unpaid':'Report'
};

function navigate(page, btn) {
  document.querySelectorAll('.page').forEach(p=>p.classList.remove('active'));
  document.getElementById('page-'+page).classList.add('active');
  document.querySelectorAll('.nav-item').forEach(i=>i.classList.remove('active'));
  if(btn) btn.classList.add('active');
  document.getElementById('topbar-title').textContent = pageLabels[page]||page;
  document.getElementById('topbar-badge').textContent = pageBadges[page]||'';
  if(page==='form-appointment'){populatePatientSelect('a-patient');populateDoctorSelect('a-doctor');}
  if(page==='form-billing'){populatePatientSelect('b-patient');}
  if(page==='patients') renderPatientsTable();
  if(page==='doctors') renderDoctorsTable();
  if(page==='appointments') renderAppointmentsTable();
  if(page==='billing') renderBillingTable();
  if(page==='inventory') renderInventoryTable();
  if(page==='dashboard') renderDashboard();
  if(page==='rpt-appt-patient'){populatePatientSelect('rpt-ap-patient',true);renderRptApptPatient();}
  if(page==='rpt-appt-doctor'){populateDoctorSelect('rpt-ad-doctor',true);renderRptApptDoctor();}
  if(page==='rpt-billing-history'){populatePatientSelect('rpt-bh-patient',true);renderRptBillingHistory();}
  if(page==='rpt-expiry') renderRptExpiry();
  if(page==='rpt-unpaid') renderRptUnpaid();
}

// ── HELPERS ─────────────────────────────────────────────────────
function getPatient(id){return DB.patients.find(p=>p.id===id)}
function getDoctor(id){return DB.doctors.find(d=>d.id===id)}
function patientName(id){const p=getPatient(id);return p?`${p.fname} ${p.lname}`:'Unknown'}
function doctorName(id){const d=getDoctor(id);return d?`Dr. ${d.fname} ${d.lname}`:'Unknown'}
function fmtDate(str){if(!str)return'—';const d=new Date(str);return d.toLocaleDateString('en-US',{year:'numeric',month:'short',day:'numeric'})}
function fmtDatetime(str){if(!str)return'—';const d=new Date(str);return d.toLocaleString('en-US',{year:'numeric',month:'short',day:'numeric',hour:'2-digit',minute:'2-digit'})}
function statusBadge(s){
  const map={'Paid':'badge-success','Scheduled':'badge-info','Completed':'badge-success','Cancelled':'badge-danger','Unpaid':'badge-danger','Partial':'badge-warning','No-show':'badge-danger','Waived':'badge-gray','Rescheduled':'badge-warning'};
  return `<span class="badge ${map[s]||'badge-gray'}">${s}</span>`;
}

function appointmentStatusOptions(currentStatus){
  const statuses = ['Scheduled', 'Completed', 'Cancelled', 'No-show', 'Rescheduled'];
  return statuses.map(status => `<option value="${status}" ${status === currentStatus ? 'selected' : ''}>${status}</option>`).join('');
}

function billingStatusOptions(currentStatus){
  const statuses = ['Unpaid', 'Paid'];
  return statuses.map(status => `<option value="${status}" ${status === currentStatus ? 'selected' : ''}>${status}</option>`).join('');
}
function daysUntil(dateStr){if(!dateStr)return null;const d=new Date(dateStr);const now=new Date();return Math.ceil((d-now)/86400000)}

function populatePatientSelect(id,addAll=false){
  const sel=document.getElementById(id); sel.innerHTML='';
  if(addAll) sel.innerHTML='<option value="">All patients</option>';
  else sel.innerHTML='<option value="">Select patient</option>';
  DB.patients.forEach(p=>{ const o=document.createElement('option');o.value=p.id;o.textContent=`[P-${String(p.id).padStart(3,'0')}] ${p.fname} ${p.lname}`;sel.appendChild(o); });
}
function populateDoctorSelect(id,addAll=false){
  const sel=document.getElementById(id); sel.innerHTML='';
  if(addAll) sel.innerHTML='<option value="">All doctors</option>';
  else sel.innerHTML='<option value="">Select doctor</option>';
  DB.doctors.forEach(d=>{ const o=document.createElement('option');o.value=d.id;o.textContent=`[D-${String(d.id).padStart(3,'0')}] Dr. ${d.fname} ${d.lname} — ${d.spec}`;sel.appendChild(o); });
}

function showToast(msg){
  const t=document.getElementById('toast');t.textContent=msg;t.classList.add('show');
  setTimeout(()=>t.classList.remove('show'),2800);
}
function emptyRow(cols,msg){return `<tr><td colspan="${cols}" style="text-align:center;color:var(--gray-400);padding:28px">${msg}</td></tr>`;}

// ── SAVE FUNCTIONS ───────────────────────────────────────────────
async function savePatient(){
  const fn=document.getElementById('p-fname').value.trim();
  const ln=document.getElementById('p-lname').value.trim();
  if(!fn||!ln){showToast('First and last name are required.');return;}
  await apiRequest(apiPaths.patients, 'POST', {
    first_name: fn,
    last_name: ln,
    dob: document.getElementById('p-dob').value,
    gender: document.getElementById('p-gender').value,
    phone: document.getElementById('p-phone').value,
    address: document.getElementById('p-address').value,
    insurance_info: document.getElementById('p-insurance').value,
  });
  await loadCollections();
  showToast(`Patient ${fn} ${ln} registered.`);
  resetForm('form-patient');
  navigate('patients',document.querySelector('[onclick*="navigate(\'patients\'"]'));
}

async function saveDoctor(){
  const fn=document.getElementById('d-fname').value.trim();
  const ln=document.getElementById('d-lname').value.trim();
  const sp=document.getElementById('d-spec').value.trim();
  if(!fn||!ln||!sp){showToast('Name and specialization are required.');return;}
  await apiRequest(apiPaths.doctors, 'POST', {
    first_name: fn,
    last_name: ln,
    specialization: sp,
    schedule: document.getElementById('d-schedule').value,
  });
  await loadCollections();
  showToast(`Dr. ${fn} ${ln} registered.`);
  resetForm('form-doctor');
  navigate('doctors',null);
}

async function saveAppointment(){
  const pid=parseInt(document.getElementById('a-patient').value);
  const did=parseInt(document.getElementById('a-doctor').value);
  const dt=document.getElementById('a-datetime').value;
  if(!pid||!did||!dt){showToast('Patient, doctor, and date/time are required.');return;}
  await apiRequest(apiPaths.appointments, 'POST', {
    patient_id: pid,
    doctor_id: did,
    appointment_date: dt,
    status: document.getElementById('a-status').value,
  });
  await loadCollections();
  showToast('Appointment booked.');
  resetForm('form-appointment');
  navigate('appointments',null);
}

async function updateAppointmentStatus(appointmentId){
  const select = document.getElementById(`appointment-status-${appointmentId}`);
  if(!select){
    return;
  }

  const status = select.value;

  try {
    await apiRequest(`${apiPaths.appointments}/${appointmentId}/status`, 'PATCH', {
      status,
    });
    await loadCollections();
    showToast(`Appointment A-${String(appointmentId).padStart(3,'0')} updated to ${status}.`);
  } catch (error) {
    console.error(error);
    showToast('Failed to update appointment status.');
  }
}

async function saveBilling(){
  const pid=parseInt(document.getElementById('b-patient').value);
  const amt=parseFloat(document.getElementById('b-amount').value);
  const dt=document.getElementById('b-date').value;
  if(!pid||!amt||!dt){showToast('Patient, amount, and date are required.');return;}
  await apiRequest(apiPaths.billing, 'POST', {
    patient_id: pid,
    amount: amt,
    billing_date: dt,
    payment_status: document.getElementById('b-status').value,
  });
  await loadCollections();
  showToast('Billing record saved.');
  resetForm('form-billing');
  navigate('billing',null);
}

async function updateBillingStatus(billingId){
  const select = document.getElementById(`billing-status-${billingId}`);
  if(!select){
    return;
  }

  const status = select.value;

  try {
    await apiRequest(`${apiPaths.billing}/${billingId}/payment-status`, 'PATCH', {
      payment_status: status,
    });
    await loadCollections();
    showToast(`Billing B-${String(billingId).padStart(3,'0')} updated to ${status}.`);
  } catch (error) {
    console.error(error);
    showToast('Failed to update billing payment status.');
  }
}

async function saveInventory(){
  const nm=document.getElementById('i-name').value.trim();
  const qty=parseInt(document.getElementById('i-qty').value);
  if(!nm||isNaN(qty)){showToast('Item name and quantity are required.');return;}
  await apiRequest(apiPaths.inventory, 'POST', {
    item_name: nm,
    quantity: qty,
    expiration_date: document.getElementById('i-expiry').value,
  });
  await loadCollections();
  showToast(`${nm} added to inventory.`);
  resetForm('form-inventory');
  navigate('inventory',null);
}

function resetForm(page){
  document.querySelectorAll(`#page-${page} input,#page-${page} select,#page-${page} textarea`).forEach(el=>{el.value='';});
}

// ── RENDER TABLES ────────────────────────────────────────────────
function renderPatientsTable(){
  const tb=document.getElementById('patients-table');
  if(!DB.patients.length){tb.innerHTML=emptyRow(6,'No patients registered yet.');return;}
  tb.innerHTML=DB.patients.map(p=>`<tr>
    <td class="id-col"><span class="id-chip">P-${String(p.id).padStart(3,'0')}</span></td>
    <td><div style="display:flex;align-items:center;gap:8px"><div class="avatar">${p.fname[0]}${p.lname[0]}</div>${p.fname} ${p.lname}</div></td>
    <td>${fmtDate(p.dob)||'—'}</td>
    <td>${p.gender||'—'}</td>
    <td>${p.phone||'—'}</td>
    <td style="max-width:160px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis">${p.insurance||'—'}</td>
  </tr>`).join('');
}

function renderDoctorsTable(){
  const tb=document.getElementById('doctors-table');
  if(!DB.doctors.length){tb.innerHTML=emptyRow(4,'No doctors registered yet.');return;}
  tb.innerHTML=DB.doctors.map(d=>`<tr>
    <td class="id-col"><span class="id-chip">D-${String(d.id).padStart(3,'0')}</span></td>
    <td><div style="display:flex;align-items:center;gap:8px"><div class="avatar" style="background:var(--blue-100);color:var(--blue-800)">${d.fname[0]}${d.lname[0]}</div>Dr. ${d.fname} ${d.lname}</div></td>
    <td><span class="badge badge-info">${d.spec}</span></td>
    <td>${d.schedule||'—'}</td>
  </tr>`).join('');
}

function renderAppointmentsTable(){
  const tb=document.getElementById('appointments-table');
  if(!DB.appointments.length){tb.innerHTML=emptyRow(5,'No appointments yet.');return;}
  tb.innerHTML=DB.appointments.map(a=>`<tr>
    <td class="id-col"><span class="id-chip">A-${String(a.id).padStart(3,'0')}</span></td>
    <td>${patientName(a.patientId)}</td><td>${doctorName(a.doctorId)}</td>
    <td>${fmtDatetime(a.datetime)}</td>
    <td>
      <div style="display:flex;flex-direction:column;gap:8px;min-width:180px">
        <div>${statusBadge(a.status)}</div>
        <div style="display:flex;gap:6px">
          <select id="appointment-status-${a.id}" style="flex:1;padding:7px 8px;border:1px solid var(--gray-200);border-radius:8px;background:#fff">
            ${appointmentStatusOptions(a.status)}
          </select>
          <button class="btn btn-secondary" type="button" onclick="updateAppointmentStatus(${a.id})">Update</button>
        </div>
      </div>
    </td>
  </tr>`).join('');
}

function renderBillingTable(){
  const tb=document.getElementById('billing-table');
  if(!DB.billing.length){tb.innerHTML=emptyRow(5,'No billing records yet.');return;}
  tb.innerHTML=DB.billing.map(b=>`<tr>
    <td class="id-col"><span class="id-chip">B-${String(b.id).padStart(3,'0')}</span></td>
    <td>${patientName(b.patientId)}</td>
    <td style="font-weight:500">$${parseFloat(b.amount).toFixed(2)}</td>
    <td>${fmtDate(b.date)}</td>
    <td>
      <div style="display:flex;flex-direction:column;gap:8px;min-width:180px">
        <div>${statusBadge(b.status)}</div>
        <div style="display:flex;gap:6px">
          <select id="billing-status-${b.id}" style="flex:1;padding:7px 8px;border:1px solid var(--gray-200);border-radius:8px;background:#fff">
            ${billingStatusOptions(b.status)}
          </select>
          <button class="btn btn-secondary" type="button" onclick="updateBillingStatus(${b.id})">Update</button>
        </div>
      </div>
    </td>
  </tr>`).join('');
}

function renderInventoryTable(){
  const tb=document.getElementById('inventory-table');
  if(!DB.inventory.length){tb.innerHTML=emptyRow(5,'No inventory items yet.');return;}
  tb.innerHTML=DB.inventory.map(i=>{
    const days=daysUntil(i.expiry);
    const daysCls=days===null?'':(days<=30?'expiry-critical':days<=60?'expiry-warn':'');
    return `<tr>
      <td class="id-col"><span class="id-chip">I-${String(i.id).padStart(3,'0')}</span></td>
      <td>${i.name}</td><td>${i.qty}</td>
      <td class="${daysCls}">${fmtDate(i.expiry)||'—'}</td>
      <td class="${daysCls}">${days===null?'—':days+' days'}</td>
    </tr>`;
  }).join('');
}

// ── DASHBOARD ───────────────────────────────────────────────────
function renderDashboard(){
  document.getElementById('st-patients').textContent=DB.patients.length;
  document.getElementById('st-doctors').textContent=DB.doctors.length;
  document.getElementById('st-appts').textContent=DB.appointments.length;
  document.getElementById('st-unpaid').textContent=DB.billing.filter(b=>b.status==='Unpaid').length;
  const tb=document.getElementById('dash-appt-table');
  const recent=[...DB.appointments].sort((a,b)=>new Date(b.datetime)-new Date(a.datetime)).slice(0,5);
  if(!recent.length){tb.innerHTML=emptyRow(4,'No appointments yet. <a href="#" onclick="navigate(\'form-appointment\',null);return false" style="color:var(--blue-600)">Book one →</a>');return;}
  tb.innerHTML=recent.map(a=>`<tr>
    <td>${patientName(a.patientId)}</td><td>${doctorName(a.doctorId)}</td>
    <td>${fmtDatetime(a.datetime)}</td><td>${statusBadge(a.status)}</td>
  </tr>`).join('');
}

// ── REPORTS ──────────────────────────────────────────────────────
function renderRptApptPatient(){
  const pid=parseInt(document.getElementById('rpt-ap-patient').value)||null;
  const data=pid?DB.appointments.filter(a=>a.patientId===pid):DB.appointments;
  document.getElementById('rpt-ap-meta').innerHTML=`Showing <strong>${data.length}</strong> record${data.length!==1?'s':''}`;
  const tb=document.getElementById('rpt-ap-table');
  if(!data.length){tb.innerHTML=emptyRow(4,'No appointments found.');return;}
  tb.innerHTML=data.map(a=>`<tr><td>${patientName(a.patientId)}</td><td>${doctorName(a.doctorId)}</td><td>${fmtDatetime(a.datetime)}</td><td>${statusBadge(a.status)}</td></tr>`).join('');
}

function renderRptApptDoctor(){
  const did=parseInt(document.getElementById('rpt-ad-doctor').value)||null;
  const data=did?DB.appointments.filter(a=>a.doctorId===did):DB.appointments;
  document.getElementById('rpt-ad-meta').innerHTML=`Showing <strong>${data.length}</strong> record${data.length!==1?'s':''}`;
  const tb=document.getElementById('rpt-ad-table');
  if(!data.length){tb.innerHTML=emptyRow(4,'No appointments found.');return;}
  tb.innerHTML=data.map(a=>`<tr><td>${doctorName(a.doctorId)}</td><td>${patientName(a.patientId)}</td><td>${fmtDatetime(a.datetime)}</td><td>${statusBadge(a.status)}</td></tr>`).join('');
}

function renderRptBillingHistory(){
  const pid=parseInt(document.getElementById('rpt-bh-patient').value)||null;
  const data=pid?DB.billing.filter(b=>b.patientId===pid):DB.billing;
  const total=data.reduce((s,b)=>s+b.amount,0);
  document.getElementById('rpt-bh-meta').innerHTML=`Showing <strong>${data.length}</strong> record${data.length!==1?'s':', total: <strong>$'+total.toFixed(2)+'</strong>'}`;
  const tb=document.getElementById('rpt-bh-table');
  if(!data.length){tb.innerHTML=emptyRow(4,'No billing records found.');return;}
  tb.innerHTML=data.map(b=>`<tr><td>${patientName(b.patientId)}</td><td style="font-weight:500">$${parseFloat(b.amount).toFixed(2)}</td><td>${fmtDate(b.date)}</td><td>${statusBadge(b.status)}</td></tr>`).join('');
}

function renderRptExpiry(){
  const days=parseInt(document.getElementById('rpt-exp-days').value);
  const data=DB.inventory.filter(i=>{if(!i.expiry)return false;const d=daysUntil(i.expiry);return d!==null&&d<=days&&d>=0;}).sort((a,b)=>daysUntil(a.expiry)-daysUntil(b.expiry));
  document.getElementById('rpt-exp-meta').innerHTML=`Showing <strong>${data.length}</strong> item${data.length!==1?'s':''} expiring within <strong>${days} days</strong>`;
  const tb=document.getElementById('rpt-exp-table');
  if(!data.length){tb.innerHTML=emptyRow(4,'No items near expiration.');return;}
  tb.innerHTML=data.map(i=>{const d=daysUntil(i.expiry);const cls=d<=30?'expiry-critical':'expiry-warn';return`<tr><td>${i.name}</td><td>${i.qty}</td><td class="${cls}">${fmtDate(i.expiry)}</td><td class="${cls}">${d} days</td></tr>`;}).join('');
}

function renderRptUnpaid(){
  const status=document.getElementById('rpt-up-status').value;
  const data=status==='all'?DB.billing.filter(b=>b.status==='Unpaid'):DB.billing.filter(b=>b.status===status);
  const total=data.reduce((s,b)=>s+b.amount,0);
  document.getElementById('rpt-up-meta').innerHTML=`Showing <strong>${data.length}</strong> record${data.length!==1?'s':''} — Outstanding: <strong>$${total.toFixed(2)}</strong>`;
  const tb=document.getElementById('rpt-up-table');
  if(!data.length){tb.innerHTML=emptyRow(4,'No unpaid records found.');return;}
  tb.innerHTML=data.map(b=>`<tr><td>${patientName(b.patientId)}</td><td style="font-weight:500;color:var(--danger)">$${parseFloat(b.amount).toFixed(2)}</td><td>${fmtDate(b.date)}</td><td>${statusBadge(b.status)}</td></tr>`).join('');
}

// Init
loadCollections().catch(error=>{
  console.error(error);
  showToast('Failed to load clinic data from MongoDB.');
  renderDashboard();
});
</script>
</body>
</html>