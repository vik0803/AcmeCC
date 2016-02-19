$(document).ready(function () {

        $('#registerForm').submit(function (e) {

            e.preventDefault();

            $.post("api/users", $(this).serialize()
            ).done(function () {
                    swal({
                        title: 'Sweetaah!!',
                        text : 'You are now registered!',
                        type : 'success'
                    });
                }
            ).error(function (result) {

                    var json = result.responseJSON;
                    var errorHtml = buildErrorList(json.error.errors);

                    swal({
                        title: 'Oops...',
                        html : errorHtml,
                        type : 'error'
                    });
                }
            );
        });

        $.get('/api/products', function (result, status) {

            if (status === 'success') {
                var products = result.data,
                    productsList = $('#productsList');

                buildProductList(products, productsList);
            }
        });
    }
);

function buildProductList (products, productsList) {

    var selectElement = $('<select></select>')
        .attr('name', 'product_id')
        .addClass('form-control');

    for (var i = 0; i < products.length; i++) {

        var productId = products[i]['product_id'],
            title = products[i]['title'],
            price = products[i]['price'],
            maximumDownloads = products[i]['maximum_downloads'];

        selectElement.append(
            $('<option></option>')
                .text(title + ' | Price: ' + price + ' | Downloads: ' + maximumDownloads)
                .attr('value', productId)
        );
    }

    productsList.append(selectElement);
}

function buildErrorList (errors) {

    var errorHtml = '<ul class="class="list-group"">';

    errors.forEach(function (item) {
        errorHtml += '<li class="list-group-item">' + item + '</li>';
    });

    errorHtml += '</ul>';

    return errorHtml;
}
