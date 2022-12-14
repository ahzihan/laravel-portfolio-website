//For Visitor Table
$( document ).ready( function () {
    $( '#VisitorDt' ).DataTable();
    $( '.dataTables_length' ).addClass( 'bs-select' );
} );

//For Services Table
function getServicesData() {
    axios.get( '/getServices' )
        .then( ( response ) => {

            if ( response.status == 200 ) {
                $( '#main-div' ).removeClass( 'd-none' );
                $( '#loading' ).addClass( 'd-none' );

                $( '#serviceDataTable' ).DataTable().destroy();
                $( "#services_table" ).empty();

                const jsonData = response.data;

                $.each( jsonData, function ( i, item ) {
                    $( "<tr>" ).html( `
            <td class="th-sm"><img class="table-img" src="${ jsonData[ i ].service_img }"></td>
            <td class="th-sm">${ jsonData[ i ].service_name }</td>
	        <td class="th-sm">${ jsonData[ i ].service_des }</td>
            <th class="th-sm"><a class="editBtn" data-id="${ jsonData[ i ].id }" data-toggle="modal" data-target="#editModal"><i class="fas fa-edit"></i></a></th>
	        <th class="th-sm"><a class="deleteBtn" data-id="${ jsonData[ i ].id }" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash-alt"></i></a></th>
            `).appendTo( "#services_table" );
                } );

                //Services Table delete icon click
                $( '.deleteBtn' ).click( function () {
                    const id = $( this ).data( 'id' );
                    $( "#serviceDeleteId" ).html( id );
                    $( "#deleteModal" ).modal( 'show' );
                } );

                //Services Edit icon click
                $( '.editBtn' ).click( function () {
                    const id = $( this ).data( 'id' );
                    $( "#serviceEditId" ).html( id );
                    serviceUpdate( id );
                    $( "#editModal" ).modal( "show" );
                } );

                $( '#serviceDataTable' ).DataTable( { "order": false } );
                $( '.dataTables_length' ).addClass( 'bs-select' );

            } else {
                $( '#loading' ).addClass( 'd-none' );
                $( '#no_item' ).removeClass( 'd-none' );
            }

        } )
        .catch( ( error ) => {
            $( '#loading' ).addClass( 'd-none' );
            $( '#no_item' ).removeClass( 'd-none' );
        } );
}

//Service delete confirm btn
$( '#confirmDelete' ).click( function () {
    const id = $( '#serviceDeleteId' ).html();
    serviceDelete( id );
} );

//Service Delete
function serviceDelete( deleteBtn ) {
    $( "#confirmDelete" )
        .html( `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="visually-hidden"></span>` );

    axios.post( '/deleteService', {
        id: deleteBtn
    } )
        .then( ( response ) => {
            $( "#confirmDelete" ).html( 'Yes' );

            if ( response.data == 1 ) {
                $( '#deleteModal' ).modal( 'hide' );
                toastr.success( 'Deleted Successfully.' );
                getServicesData();
            } else {
                $( '#deleteModal' ).modal( 'hide' );
                toastr.error( 'Fail To Delete!' );
                getServicesData();
            }
        } )
        .catch( ( error ) => {
            $( "#deleteModal" ).modal( "hide" );
            toastr.error( "Something ware wrong!" );
        } );
}

//Get Service By Id
function serviceUpdate( editId ) {
    axios.post( "/getServiceById", {
        id: editId,
    } )
        .then( ( response ) => {
            if ( response.status == 200 ) {

                $( "#serviceUpdateForm" ).removeClass( "d-none" );
                $( "#serviceEditLoading" ).addClass( "d-none" );

                const value = response.data;

                $( "#serviceName" ).val( value[ 0 ].service_name );
                $( "#serviceDes" ).val( value[ 0 ].service_des );
                $( "#serviceImg" ).val( value[ 0 ].service_img );
            } else {
                $( "#serviceDataEmpty" ).removeClass( "d-none" );
                $( "#serviceEditLoading" ).addClass( "d-none" );
            }
        } )
        .catch( ( error ) => {
            $( "#serviceDataEmpty" ).removeClass( "d-none" );
            $( "#serviceEditLoading" ).addClass( "d-none" );
        } );
}

// Services Edit Modal Save Btn
$( '#confirmUpdateBtn' ).click( function () {
    const id = $( "#serviceEditId" ).html();
    const name = $( "#serviceName" ).val();
    const des = $( "#serviceDes" ).val();
    const img = $( "#serviceImg" ).val();
    InsertUpdatedData( id, name, des, img );
} );

//Service Data Updated
function InsertUpdatedData( serviceId, serviceName, serviceDes, serviceImg ) {
    //console.log( serviceId, serviceName, serviceDes, serviceImg );
    if ( serviceName.length == 0 ) {
        toastr.error( 'Service Name is Empty !' );
    }
    else if ( serviceDes.length == 0 ) {
        toastr.error( 'Service Description is Empty !' );
    }
    else if ( serviceImg.length == 0 ) {
        toastr.error( 'Service Image is Empty !' );
    }
    else {
        $( "#confirmUpdateBtn" ).html(
            `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="visually-hidden"></span>`
        );
        axios.post( "/update", {
            id: serviceId,
            name: serviceName,
            des: serviceDes,
            img: serviceImg,
        } )
            .then( ( response ) => {
                $( "#confirmUpdateBtn" ).html( 'Update' );
                if ( response.status == 200 ) {
                    if ( response.data == 1 ) {
                        $( "#editModal" ).modal( "hide" );
                        toastr.success( "Updated Successfully." );
                        getServicesData();
                    } else {
                        $( "#editModal" ).modal( "hide" );
                        toastr.error( "Failed To Update!" );
                        getServicesData();
                    }
                } else {
                    $( "#editModal" ).modal( "hide" );
                    toastr.error( "Something went wrong!" );
                }
            } )
            .catch( ( error ) => {
                $( "#editModal" ).modal( "hide" );
                toastr.error( "Something went wrong!" );
            } );
    }
}
