import './bootstrap';
document.getElementById('copyLink').onclick = function copyLink() {
    let data = document.getElementById('resultLink').textContent.split(' ');
    let url = data[data.length - 1];
    navigator.clipboard.writeText(url);
    alert("link copied");
}