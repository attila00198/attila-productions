const url = "http://localhost/videos"

let btn = document.querySelector("#submit")
let form = document.querySelector("#add-video-form")

btn.addEventListener('click', async (e) => {
    e.preventDefault()

    const formData = new FormData(form)
    let video_title = formData.get(["video_title"])
    let video_id = formData.get(["video_id"])

    let data = {
        video_title: video_title,
        video_id: video_id
    }
    console.log(data)

    await fetch(url, {
        method: "POST",
        mode: "cors",
        credentials: "same-origin",
        cache: "no-cache",
        headers: {
            "Content-Type": "application/json; charset: utf8"
        },
        body: JSON.stringify(data)
    }).then(res => {
        return(res.json())
    }).then(data => {
        let msg = document.querySelector(".msg")
        let html = `
            <div class="d-block bg-info">
                <span>${data.msg}</span>
            </div>
        `
        msg.innerHTML = html
    })
    document.getElementById("video_id").value = ""
    document.getElementById("video_title").value = ""
});