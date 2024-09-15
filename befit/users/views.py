from django.contrib.auth.views import LogoutView, LoginView
from django.contrib.auth import login
from django.views.generic.edit import CreateView
from django.contrib.auth.views import RedirectURLMixin
from .forms import RegisterForm
from .mixins import GuestOnlyMixin


class UserLogoutView(LogoutView):
    next_page = 'index'


class RegisterView(GuestOnlyMixin, RedirectURLMixin, CreateView):
    form_class = RegisterForm
    template_name = 'users/register.html'
    next_page = 'index'

    def form_valid(self, form):
        result = super().form_valid(form)
        login(self.request, self.object)
        return result


class UserLoginView(GuestOnlyMixin, LoginView):
    template_name = 'users/login.html'
    next_page = 'index'
