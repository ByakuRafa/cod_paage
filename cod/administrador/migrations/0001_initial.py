# Generated by Django 2.2.3 on 2019-08-02 14:14

from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Zomb',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('titulo', models.CharField(max_length=200)),
                ('img', models.FileField(max_length=200, upload_to='')),
                ('desc', models.CharField(max_length=200)),
            ],
        ),
    ]
