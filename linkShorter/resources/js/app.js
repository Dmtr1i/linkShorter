import './bootstrap';

document.getElementById('submitButton').onclick = function () {
    document.getElementById('progress').className = 'progress';
}
document.getElementById('copyLink').onclick = function () {
    let data = document.getElementById('resultLink').textContent.split(' ');
    let url = data[data.length - 1];
    navigator.clipboard.writeText(url);
    alert("link copied");
}
