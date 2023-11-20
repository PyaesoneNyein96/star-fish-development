import { ssrRenderAttrs, ssrRenderStyle, ssrRenderComponent } from "vue/server-renderer";
import _sfc_main$1 from "./Profile-dbfff9d9.js";
import { useSSRContext } from "vue";
const _sfc_main = {
  name: "Nav",
  __ssrInlineRender: true,
  setup(__props) {
    return (_ctx, _push, _parent, _attrs) => {
      _push(`<nav${ssrRenderAttrs(_attrs)}><div class="bg-light d-flex justify-content-between pt-3 pb-2 px-3"><button class="btn pt-1" type="button" data-bs-toggle="collapse" data-bs-target="#sideBar" aria-expanded="false" aria-controls="sideBar"><i class="fa-solid fa-bars fs-4"></i></button><div style="${ssrRenderStyle({ "width": "45px" })}"><img src="https://static.vecteezy.com/system/resources/previews/020/765/399/non_2x/default-profile-account-unknown-icon-black-silhouette-free-vector.jpg" alt="profile" class="rounded-circle img-thumbnail dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><ul class="dropdown-menu"><li class="bg-light px-3 d-flex align-items-center" style="${ssrRenderStyle({ "height": "100px" })}"><a class="text-decoration-none text-muted fw-bold" href="#"><span class="d-block">Admin</span><small>admin@example.com</small></a></li><li><a class="dropdown-item text-muted py-2" href="#" data-bs-toggle="modal" data-bs-target="#profile"><i class="fa-solid fa-user me-2"></i>My Profile</a></li><li><a class="dropdown-item text-muted py-2" href="#"><i class="fa-solid fa-key me-2"></i>Change Password</a></li><li><a class="dropdown-item text-muted py-2" href="#"><i class="fa-solid fa-arrow-right-from-bracket me-2"></i>Logout</a></li></ul>`);
      _push(ssrRenderComponent(_sfc_main$1, null, null, _parent));
      _push(`</div></div></nav>`);
    };
  }
};
const _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Pages/Nav.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
export {
  _sfc_main as default
};
