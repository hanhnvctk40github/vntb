$(document).ready(function () {
    const inputs = document.querySelectorAll(".image-input");
    for (const imageInput of inputs) {
        imageInput.addEventListener("change", readImage, false);
    }

    document
        .getElementById("avatarInput")
        .addEventListener("change", readAvatar, false);

    // Avatar
    $(document).on("click", ".avatar-image-cancel", function () {
        $(".preview-avatar-show").remove();
    });
    // Employee images
    $(document).on("click", ".employee-image-cancel", function () {
        let no = $(this).data("no");
        let deletedImagesString = $("#deletedEmployeeImagesString").val();
        if (deletedImagesString === "") {
            $("#deletedEmployeeImagesString").val(
                deletedImagesString + $(this).next().data("name")
            );
        } else {
            $("#deletedEmployeeImagesString").val(
                deletedImagesString + "," + $(this).next().data("name")
            );
        }

        $(".preview-employee-show-" + no).remove();
    });
    $(document).on("click", ".product-image-cancel", function () {
        let no = $(this).data("no");
        let deletedImagesString = $("#deletedProductImagesString").val();
        if (deletedImagesString === "") {
            $("#deletedProductImagesString").val(
                deletedImagesString + $(this).next().data("name")
            );
        } else {
            $("#deletedImagesString").val(
                deletedImagesString + "," + $(this).next().data("name")
            );
        }

        $(".preview-product-show-" + no).remove();
    });
    // // Product images
    // $(document).on("click", ".product-image-cancel", function () {
    //     let no = $(this).data("no");
    //     $(".preview-image.preview-product-show-" + no).remove();
    // });
});

var num = 100;
function readImage(e) {
    var { type } = e.target.dataset;
    if (window.File && window.FileList && window.FileReader) {
        var files = event.target.files; //FileList object
        var output = $(`.preview-images-zone.${type}`);
        for (let i = 0; i < files.length; i++) {
            var file = files[i];
            if (!file.type.match("image")) continue;

            var picReader = new FileReader();

            picReader.addEventListener("load", function (event) {
                var picFile = event.target;
                var html =
                    `<div class="preview-image preview-${type}-show-` +
                    num +
                    '">' +
                    `<div class="image-cancel ${type}-image-cancel" data-no="` +
                    num +
                    '">' +
                    `<span
                    class="image-cancel__icon" data-no="${num}">x</span>` +
                    "</div>" +
                    '<div class="image-zone"><img id="pro-img-' +
                    num +
                    '" src="' +
                    picFile.result +
                    '"></div>';

                output.append(html);
                $("body").delegate(
                    `.${type}-image-cancel`,
                    "click",
                    function (e) {
                        e.stopPropagation();
                        let no = e.target.dataset.no;
                        $(`.preview-${type}-show-` + no).remove();
                    }
                );
                num = num + 1;
            });
            picReader.readAsDataURL(file);
        }
    } else {
        console.log("Browser not support");
    }
}
function readAvatar() {
    if (window.File && window.FileList && window.FileReader) {
        var files = event.target.files; //FileList object
        var output = $(`.preview-images-zone__avatar`);
        var file = files[0];
        if (!file.type.match("image")) return;

        var picReader = new FileReader();

        picReader.addEventListener("load", function (event) {
            var picFile = event.target;
            var html = `<div class="preview-image preview-avatar-show ui-sortable-handle">
                <div class="image-cancel avatar-image-cancel"><span
                        class="image-cancel__icon">x</span></div>
                <div class="image-zone"><img
                        src="${picFile.result}" />
                </div>
            </div>`;

            output.html(html);
            console.log(output);
            $("body").delegate(`.avatar-image-cancel`, "click", function (e) {
                e.stopPropagation();
                $(".preview-image.preview-avatar-show").remove();
            });
        });
        picReader.readAsDataURL(file);
    } else {
        console.log("Browser not support");
    }
}
