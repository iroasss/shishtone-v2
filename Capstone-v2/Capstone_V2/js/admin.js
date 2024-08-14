function profileClick() {
  // Redirect to profile page or show profile options
  window.location.href = 'profile.php';
}
function openModal() {
  document.getElementById("addModal").style.display = "block";
}

function closeModal() {
  document.getElementById("addModal").style.display = "none";
}


// VALIDATION FOR FORM

document.getElementById('petForm').addEventListener('submit', function(event) {
  const form = event.target;

  // Check if the form is valid
  if (!form.checkValidity()) {
      event.preventDefault(); // Prevent form submission
      alert('Please fill out all required fields correctly.');
  }

  // Additional custom validations
  const petName = document.getElementById('petName').value;
  const petAge = document.getElementById('petAge').value;
  const petSpecies = document.getElementById('petSpecies').value;
  const petBreed = document.getElementById('petBreed').value;
  const petColor = document.getElementById('petColor').value;
  const distinctiveFeatures = document.getElementById('distinctiveFeatures').value;
  const medicalHistory = document.getElementById('medicalHistory').value;
  const petDescription = document.getElementById('petDescription').value;
  const petImage = document.getElementById('petImage').files[0];

  if (!petName || !/^[A-Za-z\s]+$/.test(petName)) {
      alert('Pet name should only contain letters and spaces.');
      event.preventDefault();
  }

  if (!petAge || isNaN(petAge) || petAge < 0) {
      alert('Pet age must be a non-negative number.');
      event.preventDefault();
  }

  if (!petSpecies || !/^[A-Za-z\s]+$/.test(petSpecies)) {
      alert('Pet species should only contain letters and spaces.');
      event.preventDefault();
  }

  if (!petBreed || !/^[A-Za-z\s]+$/.test(petBreed)) {
      alert('Pet breed should only contain letters and spaces.');
      event.preventDefault();
  }

  if (!petColor || !/^[A-Za-z\s]+$/.test(petColor)) {
      alert('Pet color should only contain letters and spaces.');
      event.preventDefault();
  }

  if (!distinctiveFeatures) {
      alert('Please provide distinctive features.');
      event.preventDefault();
  }

  if (!medicalHistory) {
      alert('Please provide medical history.');
      event.preventDefault();
  }

  if (!petDescription) {
      alert('Please provide a description of the pet.');
      event.preventDefault();
  }

  if (!petImage) {
      alert('Please upload an image of the pet.');
      event.preventDefault();
  }
});

// END OF VALIDATION FOR FORM


// VIEW MORE DETAILS FOR PET ADDING 


function viewMore(id) {
    var petDetails = document.getElementById('pet-details-' + id);
    var name = petDetails.querySelector('p[data-field="name"]').innerText;
    var age = petDetails.querySelector('p[data-field="age"]').innerText;
    var species = petDetails.querySelector('p[data-field="species"]').innerText;
    var breed = petDetails.querySelector('p[data-field="breed"]').innerText;
    var color = petDetails.querySelector('p[data-field="color"]').innerText;
    var distinctive = petDetails.querySelector('p[data-field="distinctive"]').innerText;
    var medicalHistory = petDetails.querySelector('p[data-field="medical_history"]').innerText;
    var description = petDetails.querySelector('p[data-field="description"]').innerText;
    var location = petDetails.querySelector('p[data-field="location"]').innerText;
    var image = petDetails.querySelector('p[data-field="image"]').innerHTML;

    var modalContent = document.getElementById('modalContent');
    modalContent.innerHTML = `
        <p><strong>Pet Name:</strong> ${name}</p>
        <p><strong>Pet Age:</strong> ${age}</p>
        <p><strong>Pet Species:</strong> ${species}</p>
        <p><strong>Pet Breed:</strong> ${breed}</p>
        <p><strong>Pet Color:</strong> ${color}</p>
        <p><strong>Distinctive Features:</strong> ${distinctive}</p>
        <p><strong>Medical History:</strong> ${medicalHistory}</p>
        <p><strong>Description:</strong> ${description}</p>
        <p><strong>Location:</strong> ${location}</p>
        <p><strong>Image:</strong> ${image}</p>
    `;

    document.getElementById('detailsModal').style.display = 'block';
}

function closeDetailsModal() {
    document.getElementById('detailsModal').style.display = 'none';
}

// Add event listener to close the modal when clicking outside of it
window.onclick = function(event) {
    var modal = document.getElementById('detailsModal');
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}
// END OF VIEW MORE DETAILS FOR PET ADDING 


// PREVIEW OF THE IMAGE IN ADDING PET
// AND LIMIT UPLOAD IN 4

function previewImages(event) {
    var files = event.target.files;
    var imagePreviewContainer = document.getElementById('imagePreviewContainer');
    imagePreviewContainer.innerHTML = ''; // Clear previous previews

    if (files.length > 4) {
        alert('You can only upload a maximum of 4 images.');
        event.target.value = ''; // Clear the input
        return;
    }

    for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var reader = new FileReader();

        reader.onload = function(e) {
            var img = document.createElement('img');
            img.src = e.target.result;
            img.style.maxWidth = '100px';
            img.style.marginRight = '10px';
            img.style.marginBottom = '10px';
            imagePreviewContainer.appendChild(img);
        };

        reader.readAsDataURL(file);
    }
}

// END PREVIEW OF THE IMAGE IN ADDING PET

// ARCHIVE BUTTON

function archivePet(petId) {
    if (confirm("Are you sure you want to archive this pet?")) {
        window.location.href = "pet_list.php?archive_id=" + petId;
    }
}


function openArchivedModal() {
    document.getElementById("archivedModal").style.display = "block";
}

function closeArchivedModal() {
    document.getElementById("archivedModal").style.display = "none";
}

function unarchivePet(id) {
    if (confirm("Are you sure you want to unarchive this pet?")) {
        window.location.href = "pet_list.php?unarchive_id=" + id;
    }
}

// END OF ARCHIVE BUTTON