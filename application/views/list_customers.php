<div class="row">
    <div class="col-md-12" ng-show="customers.length > 0">
    
        <nav class= "navbar navbar-default" role= "navigation" >
            <div class= "navbar-header" >
            <a class="btn btn-lg btn-success" href="#/edit-customer/0"><i class="glyphicon glyphicon-plus"></i>&nbsp;Add new Customer</a>
            </div>
        </nav>
        <table class="table table-striped table-bordered">
        <thead>
        <th>Customer Name&nbsp;</th>
        <th>Email&nbsp;</th>
        <th>Address&nbsp;</th>
        <th>City&nbsp;</th>
        <th>Country&nbsp;</th>
        <th>Action&nbsp;</th>
        </thead>
        <tbody>
            <tr ng-repeat="data in customers">
                <td>{{data.customerName}}</td>
                <td>{{data.email}}</td>
                <td>{{data.address}}</td>
                <td>{{data.city}}</td>
                <td>{{data.country}}</td>
                <td><a href="#/edit-customer/{{data.customerNumber}}" class="btn">&nbsp;<i class="glyphicon glyphicon-edit"></i>&nbsp; Edit Customer</a></td>
            </tr>
        </tbody>
        </table>
    </div>
    <div class="col-md-12" ng-show="customers.length == 0">
        <div class="col-md-12">
            <h4>No customers found</h4>
        </div>
    </div>
</div>