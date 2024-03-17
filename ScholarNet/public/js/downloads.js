function downloadFile() {
    var downloadLink = document.getElementById('download-link');
    var url = downloadLink.getAttribute('href');
    window.location.href = url;
}
