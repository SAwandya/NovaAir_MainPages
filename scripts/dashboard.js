function apearSystemAdmin() {
    fetch('./components/System_Admin/System_admin.php')
    .then(response => response.text())
    .then(data => {
        document.getElementById('main-content').innerHTML = data;
    })
    .catch(error => console.error(error));
}

function apearAdmin() {
    fetch('./components/Admin/Admin.php')
    .then(response => response.text())
    .then(data => {
        document.getElementById('main-content').innerHTML = data;
    })
    .catch(error => console.error(error));
}

function apearCustomerSr() {
    fetch('./components/Customer_S_R/Customer_SR.php')
    .then(response => response.text())
    .then(data => {
        document.getElementById('main-content').innerHTML = data;
    })
    .catch(error => console.error(error));
}

function apearMiantenanceStaff() {
    fetch('./components/Maintenance_Staff/M_trouble_shoot.php')
    .then(response => response.text())
    .then(data => {
        document.getElementById('main-content').innerHTML = data;
    })
    .catch(error => console.error(error));
}

