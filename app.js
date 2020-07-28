const express = required('express')
const app = express()

app.use((req, res, next) => {
    res.status(2000).send({
        mensagem: 'ok'
    })
})

module.exports = app