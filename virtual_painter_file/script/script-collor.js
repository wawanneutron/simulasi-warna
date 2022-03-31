function HexToRGB(Hex) {
    /*var Long = parseInt(Hex.replace(/^#/, ""), 16);*/
    return {
        R: parseInt(Hex.substring(0, 3), 10),
        G: parseInt(Hex.substring(3, 6), 10),
        B: parseInt(Hex.substring(6, 9), 10)
    };
}

// ###################### Image KANAN #########################		
var objek = document.getElementById("pic_kanan");
var canvas = document.createElement("canvas");
var ctx = canvas.getContext("2d");
var originalPixels = null;
var currentPixels = null;

function changeColor(selectedColor) {
    if (!originalPixels) return; // Check if image has loaded
    var newColor = HexToRGB(selectedColor);

    for (var I = 0, L = originalPixels.data.length; I < L; I += 4) {
        if (currentPixels.data[I + 3] > 0) {
            currentPixels.data[I] = originalPixels.data[I] / 255 * newColor.R;
            currentPixels.data[I + 1] = originalPixels.data[I + 1] / 255 * newColor.G;
            currentPixels.data[I + 2] = originalPixels.data[I + 2] / 255 * newColor.B;
        }
    }

    ctx.putImageData(currentPixels, 0, 0);
    objek.src = canvas.toDataURL("image/png");
}

function getPixelsKanan(img) {
    canvas.width = img.width;
    canvas.height = img.height;

    ctx.drawImage(img, 0, 0, img.naturalWidth, img.naturalHeight, 0, 0, img.width, img.height);
    originalPixels = ctx.getImageData(0, 0, img.width, img.height);
    currentPixels = ctx.getImageData(0, 0, img.width, img.height);

    img.onload = null;
}

/* Fungsi untuk mengganti Warna Preview Color pada Object Atap */
function previewColorKanan(color, nama, kode) {
    document.getElementById('focus_color_kanan').style.backgroundColor = color;
    document.getElementById('nama_color_kanan').innerHTML = nama;
    document.getElementById('kode_color_kanan').innerHTML = kode;
}