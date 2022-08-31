//For Visitor Table
$( document ).ready( function () {
    $( '#VisitorDt' ).DataTable();
    $( '.dataTables_length' ).addClass( 'bs-select' );
} );

//For Services Table
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
            <th class="th-sm"><a class="editBtn" data-id="${ jsonData[ i ].id }" data-toggle="modal" data-target="#editModal"><i class="fas fa-edit"></i></a></th>
	        <th class="th-sm"><a class="deleteBtn" data-id="${ jsonData[ i ].id }" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash-alt"></i></a></th>
            `).appendTo( '#services_table' );
            } );

            //Services delete icon click
            $( '.deleteBtn' ).click( function () {
                let id = $( this ).data( 'id' );
                $( '#confirmDelete' ).attr( 'data-id', id );
            } );

            //Service delete confirm btn
            $( '#confirmDelete' ).click( function () {
                let id = $( this ).data( 'id' );
                serviceDelete( id );
            } );

            //Services Edit icon click
            $( '.editBtn' ).click( function () {
                let id = $( this ).data( 'id' );
                $( '#confirmUpdateBtn' ).attr( 'data-id', id );
                serviceUpdate( id );
            } );

            //Service update confirm btn
            $( '#confirmUpdateBtn' ).click( function () {
                let id = $( this ).data( 'id' );
                let name = $( '#serviceName' ).val();
                let des = $( '#serviceDes' ).val();
                let img = $( '#serviceImg' ).val();

                InsertUpdatedData( id, name, des, img );
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

//Service Delete
function serviceDelete( deleteBtn ) {
    axios.post( '/deleteService', {
        id: deleteBtn
    } )
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

//Get Service By Id
function serviceUpdate( editBtn ) {
    axios.post( '/getServiceById', {
        id: editBtn
    } )
        .then( ( response ) => {

            if ( response.status == 200 ) {
                const value = response.data;

                $( '#serviceUpdateForm' ).removeClass( 'd-none' );
                $( '#serviceEditLoading' ).addClass( 'd-none' );

                $( '#serviceName' ).val( value[ 0 ].service_name );
                $( '#serviceDes' ).val( value[ 0 ].service_des );
                $( '#serviceImg' ).val( value[ 0 ].service_img );
            } else {
                $( '#serviceDataEmpty' ).removeClass( 'd-none' );
                $( '#serviceEditLoading' ).addClass( 'd-none' );
            }
        } )
        .catch( ( error ) => {
            $( '#serviceDataEmpty' ).removeClass( 'd-none' );
            $( '#serviceEditLoading' ).addClass( 'd-none' );
        } );
}

//Service Data Updated
function InsertUpdatedData( serviceId, serviceName, serviceDes, serviceImg ) {
    console.log( serviceId, serviceName, serviceDes, serviceImg );
    axios.post( '/serviceUpdate', {
        id: serviceId,
        name: serviceName,
        des: serviceDes,
        img: serviceImg,
    } )
        .then( ( response ) => {
            if ( response.data == 1 ) {
                $( '#editModal' ).modal( 'hide' );
                toastr.success( 'Updated Successfully.' );
                getServicesData();
            } else {
                $( '#editModal' ).modal( 'hide' );
                toastr.error( 'Don`t Update, Something ware wrong!' );
                getServicesData();
            }
        } )
        .catch( ( error ) => {

        } );
}
