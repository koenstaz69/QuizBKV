using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Quiz
{
    #region Users
    public class Users
    {
        #region Member Variables
        protected int _user_id;
        protected string _gebruikersnaam;
        protected string _email;
        protected string _wachtwoord;
        protected int _rol;
        #endregion
        #region Constructors
        public Users() { }
        public Users(string gebruikersnaam, string email, string wachtwoord, int rol)
        {
            this._gebruikersnaam=gebruikersnaam;
            this._email=email;
            this._wachtwoord=wachtwoord;
            this._rol=rol;
        }
        #endregion
        #region Public Properties
        public virtual int User_id
        {
            get {return _user_id;}
            set {_user_id=value;}
        }
        public virtual string Gebruikersnaam
        {
            get {return _gebruikersnaam;}
            set {_gebruikersnaam=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual string Wachtwoord
        {
            get {return _wachtwoord;}
            set {_wachtwoord=value;}
        }
        public virtual int Rol
        {
            get {return _rol;}
            set {_rol=value;}
        }
        #endregion
    }
    #endregion
}