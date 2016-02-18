$(document).ready(
    function() {
        getSubscription();
    }
);

function getSubscription(subscriprionId) {

    if(subscriprionId === undefined){

        $.get('/api/subscriptions', function(data, status) {

            var validProperties = Array('subscription_id', 'title', 'user', 'downloads_left', 'price');

            if (status === 'success') {
                var subscriptions = data.data;

                for (var i = 0; i < subscriptions.length; i++) {

                    var row = $('<tr></tr>');
                    var subscription = subscriptions[i];

                    for (var prop in validProperties) {
                        var cell = $('<td></td>').text(subscription[validProperties[prop]]);
                        row.append(cell);
                    }
                    var view = $('<a></a>')
                        .attr('href', 'subscriptions/' + subscription['subscription_id'])
                        .text('View');

                    var cell = $('<td></td>').append(view);
                    row.append(cell);

                    $('#subscriptionTable').append(row);
                }
            } else {
                alert(data.error.errors);
            }
        });
    }

}