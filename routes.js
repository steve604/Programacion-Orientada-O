const express = require('express');
const { Router } = require('express');
const routes = express.Router();

//ruta para el index
routes.get('/', (req, res)=>{
    res.render('index.html');
});

//ruta para configuraciones
routes.get('/configuracion', (req, res) =>{
    res.render('htdocs/configurations.html');
});

//ruta para horarios
routes.get('/horarios', (req, res) =>{
    res.render('htdocs/schedules.html');
});
//ruta para notificaciones
routes.get('/notificaciones', (req, res) =>{
    res.render('htdocs/notifications.html');
});
//ruta para mensajes
routes.get('/mensajes', (req, res) =>{
    res.render('htdocs/messages.html');
});
//ruta para noticias
routes.get('/noticias', (req, res) =>{
    res.render('htdocs/news.html');
});
routes.get('/usuarios', (req, res) =>{
    res.render('htdocs/users.html');
});

module.exports = routes;
