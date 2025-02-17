// Image Preview Aadhar
function previewFrontAadhar(event) {
    var frontPreview = document.getElementById('aadharFrontPreview');
    frontPreview.src = URL.createObjectURL(event.target.files[0]);
    frontPreview.style.display = 'block';
}

function previewBackAadhar(event) {
    var backPreview = document.getElementById('aadharBackPreview');
    backPreview.src = URL.createObjectURL(event.target.files[0]);
    backPreview.style.display = 'block';
}
// Image Preview GST
function previewGstCertificate(event) {
    var gstPreview = document.getElementById('gstCertificatePreview');
    gstPreview.src = URL.createObjectURL(event.target.files[0]);
    gstPreview.style.display = 'block';
}

function previewOtherDocument(event) {
    var otherPreview = document.getElementById('otherDocumentPreview');
    otherPreview.src = URL.createObjectURL(event.target.files[0]);
    otherPreview.style.display = 'block';
}
// hotel
document.getElementById('copyDataBtn').addEventListener('click', function() {
    document.getElementById('hotelName').value = document.getElementById('businessName').value;
    document.getElementById('hotelAddress').value = document.getElementById('officeAddress').value;
    document.getElementById('hotelCity').value = document.getElementById('city').value;
    document.getElementById('hotelDistrict').value = document.getElementById('district').value;
    document.getElementById('hotelState').value = document.getElementById('state').value;
    document.getElementById('hotelZip').value = document.getElementById('pinCode').value;
});
// Bus
document.getElementById('copyBusDataBtn').addEventListener('click', function() {
    document.getElementById('busName').value = document.getElementById('businessName').value;
    document.getElementById('busAddress').value = document.getElementById('officeAddress').value;
    document.getElementById('busCity').value = document.getElementById('city').value;
    document.getElementById('busDistrict').value = document.getElementById('district').value;
    document.getElementById('busState').value = document.getElementById('state').value;
    document.getElementById('busZip').value = document.getElementById('pinCode').value;
});
// Bike 
document.getElementById('copyBikeDataBtn').addEventListener('click', function() {
    document.getElementById('bikeName').value = document.getElementById('businessName').value;
    document.getElementById('bikeAddress').value = document.getElementById('officeAddress').value;
    document.getElementById('bikeCity').value = document.getElementById('city').value;
    document.getElementById('bikeDistrict').value = document.getElementById('district').value;
    document.getElementById('bikeState').value = document.getElementById('state').value;
    document.getElementById('bikeZip').value = document.getElementById('pinCode').value;
});
// Trip
document.getElementById('copyTripDataBtn').addEventListener('click', function() {
    document.getElementById('tripName').value = document.getElementById('businessName').value;
    document.getElementById('tripAddress').value = document.getElementById('officeAddress').value;
    document.getElementById('tripCity').value = document.getElementById('city').value;
    document.getElementById('tripDistrict').value = document.getElementById('district').value;
    document.getElementById('tripState').value = document.getElementById('state').value;
    document.getElementById('tripZip').value = document.getElementById('pinCode').value;
});
// Activity
document.getElementById('copyActivityDataBtn').addEventListener('click', function() {
    document.getElementById('activityName').value = document.getElementById('businessName').value;
    document.getElementById('activityAddress').value = document.getElementById('officeAddress').value;
    document.getElementById('activityCity').value = document.getElementById('city').value;
    document.getElementById('activityDistrict').value = document.getElementById('district').value;
    document.getElementById('activityState').value = document.getElementById('state').value;
    document.getElementById('activityZip').value = document.getElementById('pinCode').value;
});
function toggleForm(formId) {
    var form = document.getElementById(formId);
    if (form.style.display === "none") {
        form.style.display = "block";
    } else {
        form.style.display = "none";
    }
}
// JS For modal
function showPreview(event, previewId) {
    const input = event.target;
    const reader = new FileReader();

    reader.onload = function() {
        const preview = document.getElementById(previewId);
        preview.src = reader.result;
        preview.style.display = 'block';
    };

    reader.readAsDataURL(input.files[0]);
}