const Jimp = require('jimp');
const fs = require('fs');
const arrayImg = []

return new Promise((resolve, reject) => {
    fs.readdir(__dirname+'/img/', (err, files)=> {
        files.forEach(file => {
            arrayImg.push(file)
        })
        resolve(arrayImg)
    })
}).then(response => resize(response))


function resize(imgTab) { // Function name is same as of file name
   // Reading Image
   imgTab.forEach(img => {
    async function moveImages() {
        const image = await Jimp.read(__dirname+'/img/'+img)
        image.resize(Math.floor(image.bitmap.width/4),Math.floor(image.bitmap.height/4), function(err){
            if (err) throw err;
         })
         .write(__dirname+'/dist/img/'+img);
    }
    moveImages()
   })
}
