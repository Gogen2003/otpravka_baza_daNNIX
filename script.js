// первым делом запускаем xampp и включаем apache и mysql
// далеее в корневой паспке xampp заходим в папку htdocs и создаем новую папку и в нее создаем нашим файлы все по типу html css js php и тд
// далее переходим в localhost/phpmyadmin и там создаем базу данных и новую таблицу
document.querySelector('form').addEventListener('submit',e => {
    e.preventDefault();

    const data = {
        name: document.getElementById('name').value,
        comment: document.getElementById('comment').value
    }
    sendForm(data);
});
async function sendForm(data) {
    const res = await fetch('./feedback.php', {
        method: 'POST',
        headers: {'Content-type' : 'application/json'},
        body: JSON.stringify(data)
    });

    const result = await res.json();

    if (res.status === 201) {
        alert('tgdsgsdgsd')
    } else {
        alert("dasdasd");
    }
}