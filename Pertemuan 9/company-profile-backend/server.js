const express = require('express'); 
const app = express(); 
const port = 3000; 
app.use(express.json()); 
const companyProfile = { 
name: "test company", 
description: "test company adalah perusahaan yang bergerak di bidang IT.", 
services: ["testing", "development", "consulting", "training"], 
}; 
app.get('/', (req, res) => { 
res.send('Welcome to test company API!'); 
}); 
app.get('/profile', (req, res) => { 
res.json(companyProfile); 
}); 
app.listen(port, () => { 
console.log(`Server is running on http://localhost:${port}`); 
}); 