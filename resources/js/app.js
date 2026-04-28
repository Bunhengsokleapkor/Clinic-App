function savePatient() {
  fetch('http://127.0.0.1:8000/api/patients', {
    method: 'POST',
    headers: {'Content-Type':'application/json'},
    body: JSON.stringify({
      first_name: document.getElementById('p-fname').value,
      last_name: document.getElementById('p-lname').value,
      dob: document.getElementById('p-dob').value,
      gender: document.getElementById('p-gender').value,
      phone: document.getElementById('p-phone').value,
      address: document.getElementById('p-address').value,
      insurance_info: document.getElementById('p-insurance').value
    })
  }).then(()=>alert("Saved"));
}
