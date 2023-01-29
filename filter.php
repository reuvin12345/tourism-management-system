<!doctype html>
<html>

<head>
    <link href='DataTables/datatables.min.css' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' href='https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <script src="jquery-3.3.1.min.js"></script>

    <script src="DataTables/datatables.min.js"></script>
    <script src='https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js'></script>
    <script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js'></script>
    <script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js'></script>
    <script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js'></script>
    <script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js'></script>
   
</head>

<body >

    <div class="container">
        <table Style="width:50%; padding:10px;">
            <tr> <th> Tourist Spot</th><th>Year</th><th>Month</th></tr>
			<tr>
                <td>
                    <input type='text' id="searchByName"  class="form-control " placeholder='Enter name'></td><td>
                    <input type='text' id="searchByYear"  class="form-control " placeholder='Enter name'></td><td>
                    <select id="searchBy_financial_quarter" class="form-control " required="">
                        <option value="">All</option>
                        <option value="January"> January </option>
                        <option value="February"> February </option>
                        <option value="March"> March </option>
                        <option value="April"> April </option>
                        <option value="May"> May </option>
                        <option value="June"> June </option>
                        <option value="July"> July </option>
                        <option value="August"> August </option>
                        <option value="September"> September </option>
                        <option value="October"> October </option>
                        <option value="November"> November </option>
                        <option value="December"> December </option>
                    </select>
                </td>
            </tr>
        </table>
		<br/>
        <div id="buttons"></div>

        <table id='product' class='display dataTable hoverable  table-striped'>
            <thead>
                <tr>
                    <td>This Town Male</td>
                    <td>This Town Female</td>
                    <td>Other Town Male</td>
                    <td>Other Town Female</td>
                    <td>Foreign Male</td>
                    <td>Foreign Female</td>
                    <td>Children</td>
                    <td>Youth</td>
                    <td>Adult</td>
                    <td>Old</td>
                    <td>Month</td>
                    <td>Year</td>
                    <td>Place</td>
                </tr>
            </thead>

        </table>
    </div>

    <!-- Script -->
    <script>
        $(document).ready(function () {
            var dataTable = $('#product').DataTable({
                'processing': true,
                'serverSide': true,
                'serverMethod': 'POST',
                "lengthMenu": [[10, 25, 50, 100,500,1000], [10, 25, 50,100,500,1000]],
                'dom': 'Blfrtip',
        'buttons': [

									{
										"extend": 'pdf',
										"text": 'Export PDF',
										"className": 'btn btn-primary btn-sm ml-1'
									},

								], "language": 
{          
"processing": "<img style='width:300px; height:200px;' src='load.gif' />",
},
                
                'ajax': {
                    'url': 'products.php',
                    'data': function (data) {
                        
                        var searchBy_financial_quarter = $('#searchBy_financial_quarter').val();
						var searchByName=$('#searchByName').val();
                        var searchByYear=$('#searchByYear').val();
                        

                       
                        data.searchBy_financial_quarter = searchBy_financial_quarter;
						data.searchByName = searchByName;
                        data.searchByYear = searchByYear;
                    }
                },
                'columns': [
                    { data: 'male' },
                    { data: 'female' },
                    { data: 'other_male' },
                    { data: 'other_female' },
                    { data: 'foreign_male' },
                    { data: 'foreign_female' },
                    { data: 'children' },
                    { data: 'youth' },
                    { data: 'adult' },
                    { data: 'old' },
                    { data: 'month' },
                    { data: 'year' },
                    {data: 'place' },
                ]
                
            });

           $('#searchByName').keyup(function () {
                dataTable.draw();
            }); 
            $('#searchBy_financial_quarter').change(function () {
                dataTable.draw();
            });
            $('#searchByYear').change(function () {
                dataTable.draw();
            });
        });
       
    </script>
    
</body>

</html>