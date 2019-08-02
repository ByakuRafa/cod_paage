from django.urls import path
from . import views

urlpatterns = [
path("", views.index, name="index"),
path("zomb", views.zomb, name="zomb"),
path("zomb/<int:id>", views.zombview, name="zombview"),
path("galleria", views.gal, name="gal"),
path("video", views.video, name="video"),
path("multi", views.multi, name="multi"),
path("camp", views.camp, name="camp"),
]