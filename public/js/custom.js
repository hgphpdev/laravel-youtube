var dev = {
    ready: function () {
        $(document).on('change', '.uploadFile', dev.uploadFile);
    },
    uploadFile: function (e) {
        var file = this.files;
        console.log(file);
//        return false;
        var $this = $(this);
        if (file.length == 0) {
            return false;
        }
        $('.loader-div').show();
        $.each(file, function (e, i) {
            var selectedFile = i;
            var reader  = new FileReader();
//            var type_reg_pdf = /^application\/(pdf|docx|doc)$/;
//            if (!type_reg_pdf.test(selectedFile.type)) {
//                notify('error', 'Unsupported File. ' + selectedFile.name);
//
//                return;
//            }
            if (selectedFile.size > 2000000) {
                notify('error', 'File Size too large ' + selectedFile.name);
//                $('.loader-div').hide();
                return;
            }
            reader.addEventListener("load", function () {
                var fileData = reader.result;
                var url = $this.data('file-upload-url');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var data = {base64: fileData, fileName: selectedFile.name};
                $.post(url, data, function (response) {
//                    $('.loader-div').hide();
                    notify('info', 'File uploaded ' + response.data.uploadedFile);
                }).fail(function () {
//                    $('.loader-div').hide();
                });
            }, false);
            if (selectedFile) {
                reader.readAsDataURL(selectedFile);
            }
        });
    }

};
$(document).ready(function () {
    dev.ready();
});