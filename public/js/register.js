$(document).ready(function () {

        $('#registerForm').submit(function (e) {

            e.preventDefault();

            $.post("api/users", $(this).serialize()
            ).done(function (result) {
                    sweetAlert('Sweetaah', 'You are now registered! <br />' + result.data.message, 'success');
                }
            ).error(function () {
                    sweetAlert('Oops...', 'Something went wrong!', 'error');
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
