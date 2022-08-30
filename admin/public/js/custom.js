$( document ).ready( function () {
    $( '#VisitorDt' ).DataTable();
    $( '.dataTables_length' ).addClass( 'bs-select' );
} );


function getServicesData() {
    axios.get( '/getServices' ).then( ( response ) => {

        $( '#services_table' ).empty();
        const jsonData = response.data;

        if ( response.status === 200 ) {
            $( '#main-div' ).removeClass( 'd-none' );
            $( '#loading' ).addClass( 'd-none' );
            $.each( jsonData, ( i, item ) => {
                $( '<tr>' ).html( `
            <td class="th-sm"><img class="table-img" src="${ jsonData[ i ].service_img }"></td>
            <td class="th-sm">${ jsonData[ i ].service_name }</td>
	        <td class="th-sm">${ jsonData[ i ].service_des }</td>
            <th class="th-sm"><a href="" ><i class="fas fa-edit"></i></a></th>
	        <th class="th-sm"><a class="deleteId" data-id="${ jsonData[ i ].id }" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash-alt"></i></a></th>
            ` ).appendTo( '#services_table' );
            } );

            $( '.deleteId' ).click( function () {
                let id = $( this ).data( 'id' );
                $( '#confirmDelete' ).attr( 'data-id', id );
            } );

            $( '#confirmDelete' ).click( function () {
                let id = $( this ).data( 'id' );
                serviceDelete( id );
            } );

        } else {
            $( '#loading' ).addClass( 'd-none' );
            $( '#no_item' ).removeClass( 'd-none' );
        }

    } ).catch( ( error ) => {
        $( '#loading' ).addClass( 'd-none' );
        $( '#no_item' ).removeClass( 'd-none' );
    } );
}

function serviceDelete( deleteId ) {
    axios.post( '/deleteService', { id: deleteId } )
        .then( ( response ) => {
            if ( response.data == 1 ) {
                $( '#deleteModal' ).modal( 'hide' );
                toastr.success( 'Deleted Successfully.' );
                getServicesData();
            } else {
                $( '#deleteModal' ).modal( 'hide' );
                toastr.error( 'Don`t Delete, Something ware wrong!' );
                getServicesData();
            }
        } )
        .catch( ( error ) => {

        } );
}