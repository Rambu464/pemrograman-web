$(document).ready(function() {
    $.ajax ({
        url: "https://jsonplaceholder.typicode.com/users",
        method: 'get',
        dataType: 'json',

        success: function(data) {
            data.forEach ((user) => {
                $('tbody').append(`
                    <tr>
                        <td>${user.name}</td>
                        <td>${user.address.city}</td>
                        <td>${user.company.name}</td>
                    </tr>
                `)
            })
        },

        error: function(error) {
            console.error('error !', error);
        }
    })
})