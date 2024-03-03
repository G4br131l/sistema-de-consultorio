DocumentTimeline.querySelector("#form").addEdventListener('submit', function (event) {
    event.preventDefault()

    const form = new FormData(this)

    fetch('index.php', {
        method: "POST",
        body: form
    }).then(response => console.log(response))
    .catch(err => {
        console.log(err)
    })
})