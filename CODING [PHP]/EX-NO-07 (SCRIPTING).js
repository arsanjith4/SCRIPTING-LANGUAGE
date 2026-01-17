var http = require('http');
var formidable = require('formidable');
var fs = require('fs');

http.createServer(function (req, res) {

    if (req.url == '/fileupload' && req.method.toLowerCase() == 'post') {
        var form = new formidable.IncomingForm();

        form.parse(req, function (err, fields, files) {
            var oldpath = files.filetoupload[0].filepath;
            var newpath = 'C:/Users/Kavinkumar/nodejs-upload/' + files.filetoupload[0].originalFilename;

            fs.rename(oldpath, newpath, function (err) {
                if (err) throw err;
                res.write('File uploaded and moved!');
                res.end();
            });
        });

    } else {
        res.writeHead(200, { 'Content-Type': 'text/html' });
        res.write('<form action="fileupload" method="post" enctype="multipart/form-data">');
        res.write('<input type="file" name="filetoupload"><br><br>');
        res.write('<input type="submit">');
        res.write('</form>');
        res.end();
    }

}).listen(8080);

console.log("Server running at http://localhost:8080");
