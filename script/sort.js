

var sortForm = document.getElementById('sortForm')
sortForm.addEventListener('submit', async (e) => {
    var typeSort = document.getElementById('typeSort').value
    var hsort = document.getElementById('hsort').value
    e.preventDefault();
    let url = new URL(window.location.href)
    let page = url.searchParams.get('page')
    if (page == null) {
        url.searchParams.set('page', 1)
        url.searchParams.set('sort', typeSort)
        url.searchParams.set('type', hsort)
    } else {
        url.searchParams.set('sort', typeSort)
        url.searchParams.set('type', hsort)
    }
    window.location.href = url
})