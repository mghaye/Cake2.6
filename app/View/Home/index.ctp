<div class="container" id="container">
    <table border="1" id="faktuurtabel"></table>
</div>

<script type="text/template" id="invoices-template">
    <caption>Invoices</caption>
    <thead>
    <tr class="text-info">
        <th>Id</th>
        <th>Amount incl</th>
        <th>Paydate</th>
        <th>Company name</th>
    </tr>
    </thead>

    <% //loopen over alle invoices %>

    <% for(var i=0; i<invoices.length;i++){ %>
    <% var invoice=invoices[i]; %>
    <tr>
        <td>
            <%= invoice.Invoice.id %>
        </td>
        <td>
            <%= invoice.Invoice.amount_incl %>

        </td>
        <td>
            <%= invoice.Invoice.paydate %>
        </td>
        <td>
            <%= invoice.Company.name %>

        </td>

    </tr>
    <% } %>
</script>

<script src="js/bower_components/jquery/dist/jquery.js"></script>
<script src="js/bower_components/underscore/underscore.js"></script>
<script src="js/bower_components/backbone/backbone.js"></script>

<script type="text/javascript">
    console.log('hallo');
    var Invoices=Backbone.Collection.extend({
        url:'invoices'
    });
    var invoices= new Invoices();

    var InvoicesView=Backbone.View.extend({
        collection:invoices,
        template: _.template($('#invoices-template').html()),
        initialize:function(){
            var self=this;
            this.collection.fetch().done(function(){
                self.render();
            });
        },
        render:function(){
            console.log(this.collection.toJSON());
            $('#faktuurtabel').append(this.template({'invoices':this.collection.toJSON()}));
        }

    });
    var invoicesView=new InvoicesView();
</script>
