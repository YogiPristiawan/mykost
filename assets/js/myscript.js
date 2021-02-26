$("#exampleModalCenter").on("show.bs.modal", function (event) {
	var button = $(event.relatedTarget); // Button that triggered the modal
	var nama = button.data("nama"); // Extract info from data-* attributes
	var harga = button.data("harga");
	var id = button.data("id");
	var tanggal = button.data("tanggal");
	var invoice = button.data("invoice");
	// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	var modal = $(this);
	modal.find(".modal-title").text(nama);
	modal.find(".modal-body h4").text(harga);
	modal.find(".modal-body #id").val(id);
	modal.find(".modal-body #nama_produk").val(nama);
	modal.find(".modal-body #tanggal").val(tanggal);
	modal.find(".modal-body #invoice").val(invoice);
	// modal.find(".modal-body input").val(recipient);
});
