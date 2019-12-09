// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable({
  	// columns: [
  	// 	 {data: 'name', name: 'name'},
   //          {data: 'Position', name: 'Position'},
   //          {data: 'Office', name: 'Office'},
   //          {data: 'Age', name: 'Age'},
   //          {data: 'Start date', name: 'Start date'},
   //      {data: 'salary', name: 'salary', orderable: false, searchable: false},
   //  ]
   "columnDefs": [ {
    "targets": 4,
    "orderable": false
    } ]
  });
});

$("div.alert").delay(3000).slideUp();
