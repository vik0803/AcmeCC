$(document).ready(
    function () {
        getSubscriptions();
    }
);

function getSubscriptions () {

    $.get('/api/subscriptions', function (result, status) {

        if (status === 'success') {

            var subscriptions = result.data;

            var $subscriptionTable = $('#subscriptionTable');

            buildRows(subscriptions, $subscriptionTable);

            $subscriptionTable.DataTable();
        }
    });
}

function getViewLink (subscriptionId) {

    return $('<a></a>')
        .attr('href', 'subscriptions/' + subscriptionId)
        .text('View');
}

function buildRows (subscriptions, $subscriptionTable) {

    var validProperties = [
        'subscription_id',
        'title',
        'user',
        'downloads_left',
        'price'
    ];

    for (var i = 0; i < subscriptions.length; i++) {

        var row = $('<tr></tr>');

        var subscription = subscriptions[i];

        for (var prop in validProperties) {

            row.append($('<td></td>').text(subscription[validProperties[prop]]));
        }

        row.append($('<td></td>').append(getViewLink(subscription['subscription_id'])));

        $subscriptionTable.append(row);
    }
}