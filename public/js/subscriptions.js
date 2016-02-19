$(document).ready(
    function () {
        $.get('/api/subscriptions', function (result, status) {

            if (status === 'success') {

                var subscriptions = result.data;
                var $subscriptionTable = $('#subscriptionTable');

                buildTableRows(subscriptions, $subscriptionTable);

                $subscriptionTable.DataTable();
            }
        });
    }
);

function getViewLink (subscriptionId) {

    return $('<a></a>')
        .attr('href', 'subscriptions/' + subscriptionId)
        .text('View');
}

function buildTableRows (subscriptions, $subscriptionTable) {

    for (var i = 0; i < subscriptions.length; i++) {

        var row = $('<tr></tr>');
        var subscription = subscriptions[i];

        row.append($('<td></td>').text(subscription['subscription_id']));
        row.append($('<td></td>').text(subscription['title']));
        row.append($('<td></td>').text(subscription['user']));
        row.append($('<td></td>').text(subscription['downloads']));
        row.append($('<td></td>').text(subscription['price']));
        row.append($('<td></td>').append(getViewLink(subscription['subscription_id'])));

        $subscriptionTable.append(row);
    }
}