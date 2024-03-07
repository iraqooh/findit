$(document).ready(function() {
    $('input').keyup(function() {
        var search_term = $('input').val().toLowerCase().trim()
        $.post('server.php', {search_term: search_term},
        function(data) {
            $('#suggestions').html(data)
        })
    })

    $('form').submit(function(ev) {
        ev.preventDefault()
        var searchTerm = $(this).serialize()[0]
        window.location.replace(`https://www.google.com/search?q=${searchTerm}`)
    })
})

$(document).on('click', '#suggestions li', function() {
    var searchTerm = $(this).text()
    window.location.replace(`https://www.google.com/search?q=${searchTerm}`)
})