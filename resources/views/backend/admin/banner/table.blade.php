$("#myTable").dataTable({
"oLanguage": {
"sProcessing": '<span id="loader"> please wait ...</span>'
},
"pagingType" : "simple_number",
"paging" : true,
'lengthMenu' : [
[10, 25, 50],
[10, 25, 50]
],
processing: true,
serverSide: true,
"ordering": false,
ajax: {
'type': 'POST',
'url': '{{}}',
'data': function ( d ) {

},
"dataFilter" : function ( data){
var  json = jQuery.parseJSON(data);
json.draw = json.draw();
json.recordsFilter = json.total;
json.data = json.data;

return jSON.stringify(json);
}


},
"columns": [
{"title": "#", "data" : "sl_no", "name" : "sl_no", "visible" : true, "searchable" : true},
{"title": "title", "data" : "title", "name" : "title", "visible" : true, "searchable" : true} ,
{"title": "slug", "data" : "slug", "name" : "slug", "visible" : true, "searchable" : true},
{"title": "description", "data" : "description", "name" : "description", "visible" : true, "searchable" : true}
]


});
