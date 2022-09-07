let video_list = document.getElementById("video-list")
let html = ''
let videos = []

options = {
    method: "GET",
    mode: "cors",
    cache: "no-cache",
    headers: {
        "Content-Type": "application/json; charset: utf8"
    }
}

fetch("http://localhost/videos", options)
    .then((res) => {
        return res.json();
    })
    .then((data) => {

        for (const id in data) {
            if (Object.hasOwnProperty.call(data, id)) {
                const video = data[id];
                html += `
                <div class="video-item card col-sm-12 col-md-auto pt-2">
                    <img class="img img-thumbnail" src="http://img.youtube.com/vi/${video["video_id"]}/0.jpg" alt="Video THumbnail">
                    <p title="${video["video_title"]}">${video["video_title"]}</p>
                </div>
                
                `
            }
        }
        video_list.innerHTML = html;
    })