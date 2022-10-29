export function LoginRegister()
{
return ( 
<>
<div className="container-fluid">
        <div className="row mh-100vh">
            <div className="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block" style={{background: "rgb(52,52,52)"}}>
                <div className="m-auto w-lg-75 w-xl-50" data-aos="fade-up" data-aos-delay="450" id="loginSection">
                    <div style={{textalign: "center", marginbottom: "46px"}}><a className="navbar-brand" href="index.php" style={{color: "rgb(255,255,255)", fontweight: "bold", letterspacing: "1px",borderstyle: "double"}}>&nbsp;CANVAS COMBAT&nbsp;</a></div>

                   

                    <form >
                        <div className="form-group mb-3"><label className="form-label text-secondary" style={{color: "rgb(255,255,255)!important"}}>Correo</label><input  oninput="this.value = this.value.toUpperCase()"  id="phpEmailLogin"   name="phpEmailLogin"       className="form-control" type="text" required
                         
                        inputmode="email" placeholder="Correo"></input></div>
                        <div className="form-group mb-3"><label className="form-label text-secondary" style={{color: "rgb(255,255,255)!important"}}>Contraseña</label><input id="phpPasswordLogin" name="phpPasswordLogin" className="form-control" type="password" required  placeholder="Contraseña"></input></div>
                        <button 
                        id = "logInButton"
                        className="btn btn-info mt-2" 
                        type="button"
                        onclick="loginFunction($('#phpEmailLogin').val(), $('#phpPasswordLogin').val());"
                        >Ingresar</button>
                    </form>

                    

                    <p className="mt-3 mb-0" onclick="hideLogin()" ><a className="text-info small" href="#">¿Nuevo aqui? Registrate</a></p>
                </div>


                <div data-aos="fade-up" data-aos-delay="450" className="p-5" id="registerSection">
                    <div style={{textalign: "center", marginbottom: "46px"}}><a className="navbar-brand" href="index.php" style={{color: "rgb(255,255,255)",fontweight: "bold", letterspacing: "1px",borderstyle: "double"}}>&nbsp;CANVAS COMBAT&nbsp;</a></div>
                    <div className="text-center"></div>

  
                    <form className="user">

                    <label className="form-label text-secondary" style={{color: "rgb(255,255,255)!important"}}>Nombre de Usuario</label>
                        <div className="mb-3"><input className="form-control form-control-user"  type="text" placeholder="Nombre de Usuario" oninput="this.value = this.value.toUpperCase()" name="phpUsernameRegister" required id="phpUsernameRegister"></input></div>
                        <label className="form-label text-secondary" style={{color: "rgb(255,255,255)!important"}}>Correo</label>
                        <div className="mb-3"><input className="form-control form-control-user"  type="text" id="phpEmailRegister" oninput="this.value = this.value.toUpperCase()" placeholder="Correo" required name="phpEmailRegister" inputmode="email"></input></div>
                        
                        <div className="row mb-3">
                        <label className="form-label text-secondary" style={{color: "rgb(255,255,255)!important"}}>Repetir Contraseña</label>
                            <div className="col-sm-6 mb-3 mb-sm-0"><input className="form-control form-control-user" type="password" id="password"  placeholder="Contraseña" required name="phpPasswordRegister"></input></div>
                            <div className="col-sm-6"><input className="form-control form-control-user" type="password" id="verifyPassword"  placeholder="Repetir Contraseña" required name="phpPasswordRegisterRepeat"></input></div>
                        </div>

                        <div className="row mb-3">
                        <label className="form-label text-secondary" style={{color: "rgb(255,255,255)!important"}}>Nombres</label>
                            <div className="col-sm-6 mb-3 mb-sm-0"><input className="form-control form-control-user"  type="text" oninput="this.value = this.value.toUpperCase()" placeholder="Nombres"  required name="phpFirstNameRegister" id="phpFirstNameRegister" style={{color: "rgb(255,255,255)!important", marginbottom: "5px"}}></input></div>
                            <label className="form-label text-secondary" style={{color: "rgb(255,255,255)!important"}}>Apellidos</label>
                            <div className="col-sm-6"><input className="form-control form-control-user" type="text" oninput="this.value = this.value.toUpperCase()"  placeholder="Apellidos"  name="phpLastNameRegister" required id="phpLastNameRegister"></input></div>
                        </div>

                        <div className="row mb-3">
                            <p id="emailErrorMsg" className="text-danger" style={{display: "none"}}>Paragraph</p>
                            <p id="passwordErrorMsg" className="text-danger" style={{display: "none"}}>Paragraph</p>
                        </div>
                        <button 
                        className="btn btn-info mt-2 d-block btn-user w-100" 
                        id="submitBtn" 
                        type="button"
                        onclick="emailDuplicateValidation($('#phpEmailRegister').val());"
                        >Registrar Cuenta</button>
                        <hr></hr>
                    </form>



                    <p className="mt-3 mb-0" onclick="showLogin()" ><a className="text-info small" href="#">¿Ya tienes cuenta? ¡Ingresa!</a></p>
                </div>
            </div>
            <div className="col-lg-6 d-flex align-items-end" data-aos="fade-up" data-aos-duration="450" id="bg-block" style={{background: "url(assets/img/wallpaperbetter.com_1920x10802.jpg) center center / cover"}}>
            </div>
        </div>
    </div>
</>
)

}