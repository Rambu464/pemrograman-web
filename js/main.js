function msg() {

    alert('Halo Mahasiswa');
    document.getElementById("originalHeader").innerText = "Welcome to Universitas Gunadarma!";

    
}

function changeVideo() {
    // Set the new video URL
    const newVideoURL = "https://youtube.com/embed/blOojaCVoL0?si=bJLXdZn4-PdkOh7f"; // Replace with the new video URL
    document.getElementById("videoFrame").src = newVideoURL;
}


function login() {
    window.location.href = "http://localhost/phpdocs/pemrograman-web-main/login/create.php";
}