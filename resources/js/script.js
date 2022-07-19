if ($(window).width() < 425) {
	$('.animated-icon2').toggleClass('open');
	$('#accordionSidebar').toggleClass('toggled');
}

$('[data-toggle="modal"]').click(function(){
	$('.id').val($(this).data('id'));
	$('.name').val($(this).data('name'));
	$('.name').html($(this).data('name'));
	$('.registration-number').val($(this).data('registration-number'));
	$('.serial-number').val($(this).data('serial-number'));
	$('.car_id').val($(this).data('car_id'));
});

$('table').DataTable({
	"pageLength": 20,
	"scrollX":        false,
	"language": {
		"decimal":        "",
		"emptyTable":     "Žiadne záznamy neboli nájdené.",
		"info":           "Zobrazených _START_ do _END_ z _TOTAL_ záznamov",
		"infoEmpty":      "Zobrazených 0 do 0 z 0 záznamov",
		"infoFiltered":   "(Zobrazených z _MAX_ všetkých záznamov)",
		"infoPostFix":    "",
		"thousands":      ",",
		"searchPlaceholder": "Hľadať v tabuľke",
		"lengthMenu":     "Show _MENU_ entries",
		"loadingRecords": "Načítanie...",
		"processing":     "Spracovávanie...",
		"search":         "Filter:",
		"zeroRecords":    "Žiadne záznamy neboli nájdené.",
		"paginate": {
				"first":      "Prvá",
				"last":       "Posledná",
				"next":       ">",
				"previous":   "<"
		},
		"aria": {
				"sortAscending":  ": activate to sort column ascending",
				"sortDescending": ": activate to sort column descending"
		},
	}
});