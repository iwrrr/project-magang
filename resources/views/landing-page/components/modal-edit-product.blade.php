<div class="modal fade" id="editProduct" tabindex="-1" aria-labelledby="editProductLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProductLabel">Edit Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('edit-product', 1) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="productName" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="productName" name="product_name" required>
                        </div>
                        <div class="col-md-12">
                            <label for="productStock" class="form-label">Stok</label>
                            <input type="number" class="form-control" id="productStock" min="0"
                                name="product_stock" required oninput="numberFormat(this)">
                        </div>
                        <div class="col-md-12">
                            <label for="productPrice" class="form-label">Harga</label>
                            <div class="input-group">
                                <div class="input-group-text">Rp</div>
                                <input type="text" class="form-control" id="productPrice" maxlength="12"
                                    name="product_price" required oninput="numberFormat(this)">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function numberFormat(input) {
        if (/^0/.test(input.value)) {
            input.value = input.value.replace(/^0/, "")
        }

        let removeChar = input.value.replace(/[^0-9\.]/g, '') // This is to remove alphabets and special characters.
        let removeDot = removeChar.replace(/\./g, '') // This is to remove "DOT"
        input.value = removeDot

        let formatedNumber = input.value.replace(/\B(?=(\d{3})+(?!\d))/g, ".")
        input.value = formatedNumber
    }

    $('#editProduct').on('show.bs.modal', event => {
        let product = $(event.relatedTarget).data('product');
        let modalBody = $('.modal-body');
        
        // show loading spinner while waiting for ajax to be done
        modalBody.html(`
            <div class="text-center">
                <div class="spinner-border" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        `);
        
        $.ajax({
            url: `/get-product/${product}`, // the url for your show method
            method: 'get',
            success: function(response) {
                modalBody.html(`
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="productName" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="productName" name="product_name" value="${response.product_name}" required>
                        </div>
                        <div class="col-md-12">
                            <label for="productStock" class="form-label">Stok</label>
                            <input type="number" class="form-control" id="productStock" min="0"
                                name="product_stock" value="${response.product_stock}"  required oninput="numberFormat(this)">
                        </div>
                        <div class="col-md-12">
                            <label for="productPrice" class="form-label">Harga</label>
                            <div class="input-group">
                                <div class="input-group-text">Rp</div>
                                <input type="text" class="form-control" id="productPrice" maxlength="12"
                                    name="product_price" value="${response.product_price}"  required oninput="numberFormat(this)">
                            </div>
                        </div>
                    </div>
                `)
            }
        })
        // .done(view => modalBody.html(`
        //     <div class="row g-3">
        //         <div class="col-md-12">
        //             <label for="productName" class="form-label">Nama Produk</label>
        //             <input type="text" class="form-control" id="productName" name="product_name" required>
        //         </div>
        //         <div class="col-md-12">
        //             <label for="productStock" class="form-label">Stok</label>
        //             <input type="number" class="form-control" id="productStock" min="0"
        //                 name="product_stock" required oninput="numberFormat(this)">
        //         </div>
        //         <div class="col-md-12">
        //             <label for="productPrice" class="form-label">Harga</label>
        //             <div class="input-group">
        //                 <div class="input-group-text">Rp</div>
        //                 <input type="text" class="form-control" id="productPrice" maxlength="12"
        //                     name="product_price" required oninput="numberFormat(this)">
        //             </div>
        //         </div>
        //     </div>
        // `))
        // .fail(error => console.error(error));
    });
</script>
