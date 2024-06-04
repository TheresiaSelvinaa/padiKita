// script.js
document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault();

    const jenis = document.getElementById('jenis').value;

    fetch('cari_karakteristik.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `jenis=${jenis}`,
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('result').innerHTML = data;
    })
    .catch(error => console.error('Error:', error));
});
