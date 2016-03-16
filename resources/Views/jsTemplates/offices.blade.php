<script id="offices" type="text/html">
    <h1>Offices</h1>
    <table id='officesTable' class="table table-striped">
        <thead>
        <tr>
            <th>officeCode</th>
            <th>addressLine1</th>
            <th>addressLine2</th>
            <th>city</th>
            <th>state</th>
            <th>postalCode</th>
            <th>country</th>
            <th>territory</th>
            <th>phone</th>
        </tr>
        </thead>
        @{{#offices}}
        <tr>
            <td>@{{officeCode}}</td>
            <td>@{{addressLine1}}</td>
            <td>@{{addressLine2}}</td>
            <td>@{{city}}</td>
            <td>@{{state}}</td>
            <td>@{{postalCode}}</td>
            <td>@{{country}}</td>
            <td>@{{territory}}</td>
            <td>@{{phone}}</td>
        </tr>
        @{{/offices}}
    </table>
</script>