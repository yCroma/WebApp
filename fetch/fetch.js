console.log("test");
const data = { "name": "Tanaka" };
function postrequest () {
    //const requestURL = "https://https://webapp.clomalog.com/fetch/response.php";
    const requestURL = "./response.php"
    const param = {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json; charset=utf-8'
        },
        body: JSON.stringify(data),
    };
    fetch(requestURL, param)
        .then((res) => {
            return res.json();
        })
        .then((json) => {
            const done = document.getElementById("done");
            done.innerHTML = "post_success";
        })
        .catch((error) => {
            console.error('Error.....:', error);
        })
}
function getrequest () {
    //const requestURL = "https://https://webapp.clomalog.com/fetch/response.php";
    const requestURL = "./response.php"
    fetch(requestURL)
        .then(response => {
            return response.json();
        })
        .then(json => {
            const get_done = document.getElementById("get_done");
            get_done.innerHTML = `
            get_success
            the json is
            ${json}
            `;
        })
        .catch(error => {
            console.error('Error.....:', error);
        })
}
