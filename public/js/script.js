function menuSetActive() {
    let menuItems = document.getElementsByClassName("nav-link")
    let currentPage = window.location.pathname
    console.log(currentPage)
    for (const item of menuItems) {
        if (currentPage == item.getAttribute("href")) {
            item.classList = "nav-link active"
        } else {
            item.classList = "nav-link"
        }
        console.log(item.classList, item.getAttribute("href"))
    }

}

menuSetActive();