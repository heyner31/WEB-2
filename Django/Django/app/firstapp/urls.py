from django.urls import path

from . import views

urlpatterns = [
    path('',views.vista,name='index'),
    path('cotizador',views.vista2,name='cotizador'),
]
