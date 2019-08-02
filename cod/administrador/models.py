from django.db import models

class Zomb(models.Model):
    titulo = models.CharField(max_length=200)
    img = models.FileField(max_length=200)
    desc = models.CharField(max_length=200)

    def __str__(self):
        return self.titulo

